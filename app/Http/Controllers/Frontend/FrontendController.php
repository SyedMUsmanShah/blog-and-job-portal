<?php

namespace App\Http\Controllers\Frontend;

use App\Exports\ApplicationExport;
use App\Http\Controllers\Controller;
use App\Mail\Support;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Modules\Job\Models\Job;
use Modules\Blog\Models\Blog;
use Modules\Application\Models\Application;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function vacancy()
    {
        $jobs = Job::paginate(12);
        return view('frontend.jobs', compact('jobs'));
    }
    public function jobSearch(HttpRequest $request)
    {
        $query = $request->input('search');

        $jobs = Job::where('name', 'like', "%$query%")->paginate(10);

        return view('frontend.jobs', compact('jobs'));
    }
    // public function incrementClicks(HttpRequest $request, Job $job)
    // {
    //     $job->incrementClicks();

    //     return response()->json([
    //         'applyUrl' => route('frontend.apply', ['id' => $job->id]),
    //     ]);
    // }
    public function apply($id)
    {
        $apply = Job::find($id);
        $apply->clicks = $apply->clicks + 1;
        $apply->save();
        return view('frontend.jobDetails', compact('apply'));
    }
    public function applyJob(HttpRequest $request, $position)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'message' => 'required',
            'pdf' => 'required',
            'cover' => 'required',
        ]);
        $application = new Application;
        $designation = $position;
        $application->name = $request->fname;
        $application->lname = $request->lname;
        $application->email = $request->email;
        $application->number = $request->number;
        $application->message = $request->message;
        $application->designation = $designation;
        $filename = time() . '_' . uniqid() . '.' . $request->pdf->getClientOriginalExtension();
        $request->pdf->move(public_path('img'), $filename);
        $application->resume = $filename;

        $filenameTwo = time() . '_' . uniqid() . '.' . $request->cover->getClientOriginalExtension();
        $request->cover->move(public_path('img'), $filenameTwo);
        $application->cover_letter = $filenameTwo;

        $application->save();
        return redirect()->route('frontend.index');
    }

    public function exportToCSV()
    {
        return Excel::download(new ApplicationExport, 'Application-csv.csv');
    }
    public function blog()
    {
        $blogs = Blog::paginate(12);
        return view('frontend.blogs', compact('blogs'));
    }
    public function blogShow($id)
    {
        $blog = Blog::find($id);
        return view('frontend.blog-detail', compact('blog'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function submitForm(HttpRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'message' => 'required',
        ]);
        // Send email
        Mail::to('your@email.com')->send(new Support($validatedData));

        return redirect()->route('frontend.contact')->with('success', 'Message sent successfully!');
    }

    public function clientFaq()
    {
        return view('frontend.clientFAQ');
    }
    public function employeeFaq()
    {
        return view('frontend.employeeFAQ');
    }


    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        return view('frontend.privacy');
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('frontend.terms');
    }
}
