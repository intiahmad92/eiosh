<x-admin-layout>
    <div class="px-4">
        <div class="card mb-4">
            <livewire:admin.common.header
                :title="$module->name.' List'"
                :content="'List of all '.$module->name.' are below'"
                :icon="'fa-school'"
                :term="$module->term"
                :slug="url('/admin/'.$module->slug.'/add')"
                :button="__('Add New '.$module->term)"
            />
            <div class="card-body">
                @if(session()->has('message.added'))
                    <div class="alert alert-{{ session('message.added') }} alert-dismissible fade show" role="alert">
                        <strong>{{__('Congratulations')}}!</strong> {!! session('message.content') !!}.
                    </div>
                @endif
                <input type="hidden" id="table-modules-data-url" value="{{ Request::url() }}">
                <input type="hidden" id="is_enable_modules_data_action" value="{{ (in_array('modules.data.edit', permissions()) || in_array('modules.data.destroy', permissions())) ? 'yes' : 'no' }}">
                <table class="table table-bordered" id="table-modules-data" style="width:100%">
                    <thead>
                        <tr>
                            @if($module->is_image)
                                <th>{{__('Image')}}</th>
                            @endif
                            <th>{{__('Name')}}</th>
                            @if($module->category)
                                <th>{!! $parent->term !!}</th>
                            @endif
                            @foreach($module->fields()->get() ?? [__('Created Date')] as $list)
                                <th>{{ $list->field_title ?? __('Created Date') }}</th>
                            @endforeach
                            <th>{{__('Status')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        <tr role="row" class="filter">
                            @if($module->is_image)
                                <td></td>
                            @endif
                            <td><input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Search Name"></td>
                            @if($module->category)
                                <td>{!! Form::select('category', [''=>'Select '.$parent->term]+dataArray($module->parent_id), null, array('class'=>'form-control', 'id'=>'category', 'required'=>'required')) !!}</td>
                            @endif
                            @foreach($module->fields()->get() ?? [] as $list)
                                <td>
                                    @if($list->field_type == 'select')
                                    {!! Form::select($list->field, [''=>'Select '.$list->field_title]+dataArray($list->field_attr), null, array('class'=>'form-control', 'id'=>$list->field, 'required'=>'required')) !!}
                                    @else
                                    <input type="text" class="form-control" name="{{ $list->field }}" id="{{ $list->field }}" autocomplete="off" placeholder="Search {{ $list->field_title }}">
                                    @endif
                                </td>
                            @endforeach
                            <td>
                                <select name="status" id="status" class="form-control status">
                                    <option value="">Select Status</option>
                                    <option value="active">Active</option>
                                    <option value="blocked">Blocked</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <input type="hidden" id="is_image" name="is_image" value="{{ $module->is_image ? 'yes' : 'no' }}">
    <input type="hidden" id="is_category" name="is_category" value="{{ $module->category ? 'yes' : 'no' }}">
    <input type="hidden" id="message_added" name="message_added" value="{{ session()->has('message.added') ? 'yes' : 'no' }}">
    <input type="hidden" id="message" name="message" value="{!! session('message.content') !!}">
    <input type="hidden" id="modules_data_fetch" name="modules_data_fetch" value="{{ route('admin.modules.data.fetch') }}">
    <input type="hidden" id="module_id" name="module_id" value="{{ $module->id }}">
    <input type="hidden" id="module_fields" name="module_fields" value="{{ json_encode($module->fields()->get()) }}">
    <input type="hidden" id="base_url" name="base_url" value="{{ url('/') }}">

    @push('js')
        <script src="{{ asset('admin_assets/js/modules.js?v=2') }}"></script>
    @endpush
</x-admin-layout>
