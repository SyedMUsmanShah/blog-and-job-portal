<p>
    @lang("Displaing all the values of :module_name (Id: :id)", ['module_name'=>ucwords($module_name_singular), 'id'=>$$module_name_singular->id]).
</p>
<table class="table table-responsive-sm table-hover table-bordered">
    <?php
    $all_columns = $$module_name_singular->getTableColumns();
    ?>
    <thead>
        <tr>
            <th scope="col">
                <strong>
                    @lang('Name')
                </strong>
            </th>
            <th scope="col">
                <strong>
                    @lang('Value')
                </strong>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($all_columns as $column)
        <tr>
            <td>
                <strong>
                    {{ __(label_case($column->Field)) }}
                </strong>
            </td>
            @if ($column->Field == 'resume' || $column->Field == 'cover_letter')
            <td>
                <iframe height="500px" width="50%" src="/img/{!! show_column_value($$module_name_singular, $column) !!}" frameborder="0"></iframe>
            </td>

            @else

            <td>
                {!! show_column_value($$module_name_singular, $column) !!}
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

{{-- Lightbox2 Library --}}
<x-library.lightbox />
