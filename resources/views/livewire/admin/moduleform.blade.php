<div class="row">
@php
    $totalFields = $module->extra_fields;
    $arrSort = [];

    if ($totalFields > 0) {
        for ($i = 1; $i <= $totalFields; $i++) {
            $arrSort += getFieldAttributes($module, $i);
        }
    }

    uksort($arrSort, function ($a, $b) {
        return $a - $b;
    });

    $requiredArr = [];

    if (!empty($arrSort)) {
        foreach ($arrSort as $key => $sort) {
            list($fieldTitle, $fieldName, $fieldType, $fieldMaxLength, $fieldRequired, $fieldRequiredMessage,
                $fieldShow, $fieldAttr, $isRequired, $fieldCol) = $sort;

            $requiredArr[] = [
                'field' => $fieldName,
                'required' => $isRequired == 'required' ? 'yes' : 'no',
                'message' => $fieldRequiredMessage,
            ];

            @endphp
            @if ($fieldShow)
                <div class="col-lg-{{ $module->$fieldCol }}">
                    <div class="mb-3">
                        <label>Enter {{ $fieldTitle }} </label>

                        @if ($fieldType == 'select')
                            {{ Form::select($fieldName, ['' => 'Select ' . $fieldTitle] + dropdown($fieldAttr), null, ['class' => 'form-control', 'id' => $fieldName, $isRequired, 'oninvalid' => "this.setCustomValidity('" . $fieldRequiredMessage . "')", 'oninput' => "this.setCustomValidity('')"]) }}
                            
                        @elseif ($fieldType == 'checkbox')
                            {{ Form::checkbox($fieldName, null, null, ['id' => $fieldName]) }}
                        @elseif ($fieldType == 'file')
                                {{ Form::file($fieldName, ['class' => 'form-control form-control-file', 'id' => $fieldName, $isRequired, 'oninvalid' => "this.setCustomValidity('" . $fieldRequiredMessage . "')", 'oninput' => "this.setCustomValidity('')"]) }}
                            @if(isset($module_data) && $module_data->$fieldName)
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ asset('images/' . $module_data->$fieldName) }}" download>{{ $module_data->$fieldName }}</a> &nbsp <a style="color: red" href="{{route('admin.modules.data.delete.file',[$module_data->id,$fieldName])}}"  onclick="return confirm('Are you sure you want to delete this file?')"><i class="fa-regular fa-circle-xmark"></i></a>
                                    </div>
                                </div>
                                    
                            @endif
                        @else
                            {{ Form::$fieldType($fieldName, null, ['class' => 'form-control', 'id' => $fieldName, 'placeholder' => 'Enter ' . $fieldTitle, $isRequired, 'maxlength' => $fieldMaxLength, 'oninvalid' => "this.setCustomValidity('" . $fieldRequiredMessage . "')", 'oninput' => "this.setCustomValidity('')"]) }}
                        @endif

                    </div>
                </div>
            @endif
            @php
            }
        }
    @endphp
</div>    