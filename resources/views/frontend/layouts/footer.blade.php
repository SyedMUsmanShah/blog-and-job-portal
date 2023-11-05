<!-- CTA area start -->
<section class="cta-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6">
                <h4>best solution for your business </h4>
                <p><b>Connecting Talents, Powering Futures.</b></p>
            </div>
            <div class="col-xxl-6 text-center">
                <a href="{{ route('frontend.contact') }}" class="box-btn">contact us</a>
            </div>
        </div>
    </div>
</section>
<!-- CTA area end -->

<!-- footer area start -->
<footer class="footer-area">
    <div class="row m-0 p-0 col-12">
        <div class="col-sm-12 col-md-3 text-center mb-5">
            <div class="footer-logo">
                <!-- <h4>Groundnet</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi aliquid nihil delectus rem qui aperiam.</p> -->
                {{-- <img src="{{ url('frontend/assets/img/logo/logo3.png') }}" alt="Logo" srcset=""
                        class="w-100" height="100px"> --}}
                <img src="{{ url('frontend/assets/img/logo/logo4_1236x378-removebg-preview.png') }}" alt="Logo" srcset="" height="100px">
                {{-- <img src="{{ url('frontend/assets/img/logo/logo4.png') }}" alt="Logo" srcset=""
                        class="w-100" height="100px"> --}}
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-3 pr-0">
            <div class="single-footer">
                <h4 class="page-title">quick link</h4>
                <ul>
                    <li><a href="{{ route('frontend.index') }}"><i class="fa-solid fa-angles-right"></i>home</a>
                    </li>
                    <li><a href="{{ route('frontend.about') }}"><i class="fa-solid fa-angles-right"></i>about us</a>
                    </li>
                    <li><a href="{{ route('frontend.services') }}"><i class="fa-solid fa-angles-right"></i>services</a>
                    </li>
                    <li><a href="{{ route('frontend.blog') }}"><i class="fa-solid fa-angles-right"></i>Blogs</a>
                    </li>
                    <li><a href="{{ route('frontend.vacancy') }}"><i class="fa-solid fa-angles-right"></i>Jobs</a>
                    </li>
                    <li><a href="{{ route('frontend.contact') }}"><i class="fa-solid fa-angles-right"></i>contact
                            us</a></li>
                </ul>
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-3 p-0">
            <div class="single-footer">
                <h4 class="page-title">Contact Us</h4>
                <ul class="contact-ul">
                    <li><i class="fa-sharp fa-solid fa-location-dot"></i> 15-219 Silvercreek Parkway North,Guelph,ON N1H
                        7K4
                    </li>
                    <li><i class="fa-solid fa-phone"></i> +5197661333</li>
                    <li><i class="fa-solid fa-phone"></i> +6475466673</li>
                    <li><i class="fa-sharp fa-solid fa-envelope"></i> info@peopleconnectstaffing.ca</li>
                    <li><i class="fa-sharp fa-solid fa-envelope"></i> hr@peopleconnectstaffing.ca</li>
                </ul>
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-3 m-auto p-1 copy">
            <a href="https://www.facebook.com/profile.php?id=100091671414068&mibextid=LQQJ4d" target="_blank"><i
                    class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/PeopleCStaffing" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.instagram.com/peopleconnect_staffing/" target="_blank"><i
                    class="fa-brands fa-instagram"></i></a>

        </div>
    </div>
    <div class="row m-0 p-0 copy">
        <div class="col-12 p-1 text-center">
            <p>copyright PeopleConnectStaffing &copy; @php echo date('Y'); @endphp</p>
        </div>

    </div>
</footer>

<!-- footer area end -->



<!-- Jquery -->
<script src="{{ url('frontend/assets/js/jquery.min.js') }}"></script>
<!-- Popper -->
<script src="{{ url('frontend/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap-->
<script src="{{ url('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- Carousel -->
<script src="{{ url('frontend/assets/js/owl-carousel.min.js') }}"></script>
<!-- waypoint -->
<script src="{{ url('frontend/assets/js/waypoint.min.js') }}"></script>
<!-- counterup -->
<script src="{{ url('frontend/assets/js/counterup.min.js') }}"></script>
<!-- Main-->
<script src="{{ url('frontend/assets/js/main.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.question');
            const arrow = item.querySelector('.arrow');
            const answer = item.querySelector('.answer');

            question.addEventListener('click', () => {
                if (answer.classList.contains('active')) {
                    slideUp(answer);
                    answer.classList.remove('active');
                    arrow.classList.remove('arrow-active');
                } else {
                    slideDown(answer);
                    answer.classList.add('active');
                    arrow.classList.add('arrow-active');
                }
            });
        });

        function slideDown(element) {
            element.style.maxHeight = element.scrollHeight + 'px';
            element.style.opacity = '1';
        }

        function slideUp(element) {
            element.style.maxHeight = '0';
            element.style.opacity = '0';
        }
    });
// dark-mode.js
const darkModeToggle = document.getElementById('darkModeToggle');
const darkModeIcon = document.getElementById('darkModeIcon');
const body = document.body;

// Check if dark mode is enabled in localStorage
const isDarkMode = localStorage.getItem('darkMode') === 'true';

// Set initial dark mode state and icon
if (isDarkMode) {
    body.classList.add('dark-mode');
    darkModeIcon.classList.add('fa-moon');
} else {
    darkModeIcon.classList.add('fa-sun');
}

// Toggle dark mode and icon on button click
darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', body.classList.contains('dark-mode'));

    darkModeIcon.classList.toggle('fa-moon');
    darkModeIcon.classList.toggle('fa-sun');
});

</script>
{{-- <script>
    function incrementClicks(jobId) {
        axios.post(`/jobs/${jobId}/increment-clicks`)
            .then(response => {
                // Redirect to the apply page
                window.location.href = response.data.applyUrl;
            })
            .catch(error => {
                console.error(error);
            });
    }
</script> --}}
</body>

</html>
