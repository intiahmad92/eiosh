<div class="row">
   <div class="col-md-6">
      <div class="mb-3">
         {!! Form::label('name', 'Module Name', ['class' => '']) !!}
         {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Module Name')) !!}
      </div>
   </div>
   <div class="col-md-6">
      <div class="mb-3">
         {!! Form::label('term', 'Module Term', ['class' => '']) !!}
         {!! Form::text('term', null, array('class'=>'form-control', 'id'=>'term', 'placeholder'=>'Module Term')) !!}
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="mb-3">
         @php
         $fields = array(
         0 => 'No',
         1 => 'Yes',
         );
         @endphp
         {!! Form::label('is_slug', 'Module Slug', ['class' => '']) !!}
         {!! Form::select('is_slug', $fields, null, array('class'=>'form-control', 'id'=>'is_slug')) !!}
      </div>
   </div>
   <div class="col-md-4">
      <div class="mb-3">
         {!! Form::label('is_menu', 'Module Menus', ['class' => '']) !!}
         {!! Form::select('is_menu', $fields, null, array('class'=>'form-control', 'id'=>'is_menu')) !!}
      </div>
   </div>
   <div class="col-md-4">
      <div class="mb-3">
         {!! Form::label('is_preview', 'Module Preview', ['class' => '']) !!}
         {!! Form::select('is_preview', $fields, null, array('class'=>'form-control', 'id'=>'is_preview')) !!}
      </div>
   </div>
   <div class="col-md-4">
      <div class="mb-3">
         {!! Form::label('is_description', 'Module Description', ['class' => '']) !!}
         {!! Form::select('is_description', $fields, null, array('class'=>'form-control', 'id'=>'is_description')) !!}
      </div>
   </div>
   <div class="col-md-4">
      <div class="mb-3">
         {!! Form::label('is_highlights', 'Module Highlights', ['class' => '']) !!}
         {!! Form::select('is_highlights', $fields, null, array('class'=>'form-control', 'id'=>'is_highlights')) !!}
      </div>
   </div>
   <div class="col-md-4">
      <div class="mb-3">
         {!! Form::label('is_seo', 'Module Seo', ['class' => '']) !!}
         {!! Form::select('is_seo', $fields, null, array('class'=>'form-control', 'id'=>'is_seo')) !!}
      </div>
   </div>
   <div class="col-md-4">
      <div class="mb-3">
         {!! Form::label('category', 'Module Category', ['class' => '']) !!}
         {!! Form::select('category', $fields, null, array('class'=>'form-control', 'id'=>'category')) !!}
      </div>
   </div>
   <div class="col-md-6">
      <div class="mb-3">
         {!! Form::label('parent_id', 'Module Category', ['class' => '']) !!}
         {!! Form::select('parent_id', [''=>'Select Category']+$categories, null, array('class'=>'form-control', 'id'=>'parent_id')) !!}
      </div>
   </div>
   <div class="col-md-6">
      <div class="mb-3">
         {!! Form::label('multiple_category', 'Multiple Categories', ['class' => '']) !!}
         {!! Form::select('multiple_category', $fields, null, array('class'=>'form-control', 'id'=>'multiple_category')) !!}
      </div>
   </div>
   <div class="col-md-6">
      <div class="mb-3">
         {!! Form::label('sub_category', 'Module Sub Category', ['class' => '']) !!}
         {!! Form::select('sub_category', $fields, null, array('class'=>'form-control', 'id'=>'sub_category')) !!}
      </div>
   </div>
   <div class="col-md-6">
      <div class="mb-3">
         {!! Form::label('parent_sub_id', 'Module Sub Category', ['class' => '']) !!}
         {!! Form::select('parent_sub_id', [''=>'Select Sub Category']+$categories, null, array('class'=>'form-control', 'id'=>'parent_sub_id')) !!}
      </div>
   </div>
   <div class="col-md-12">
      <div class="mb-3">
         {!! Form::label('tags', 'Module Tags', ['class' => '']) !!}
         {!! Form::select('tags', $fields, null, array('class'=>'form-control', 'id'=>'tags')) !!}
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-6">
      <div class="mb-3">
         {!! Form::label('is_image', 'Module Image', ['class' => '']) !!}
         {!! Form::select('is_image', $fields, null, array('class'=>'form-control', 'id'=>'is_image')) !!}
      </div>
   </div>
   <div class="col-md-6">
      <div class="mb-3">
         {!! Form::label('multi_images', 'Multi Images', ['class' => '']) !!}
         {!! Form::select('multi_images', $fields, null, array('class'=>'form-control', 'id'=>'multi_images')) !!}
      </div>
   </div>
   <div class="col-md-6 image_section">
      <div class="mb-3">
         {!! Form::label('thumbnail_height', 'Thumbnail Height', ['class' => '']) !!}
         {!! Form::text('thumbnail_height', null, array('class'=>'form-control', 'id'=>'thumbnail_height', 'placeholder'=>'Thumbnail Height')) !!}
      </div>
   </div>
   <div class="col-md-6 image_section">
      <div class="mb-3">
         {!! Form::label('thumbnail_width', 'Thumbnail Width', ['class' => '']) !!}
         {!! Form::text('thumbnail_width', null, array('class'=>'form-control', 'id'=>'thumbnail_width', 'placeholder'=>'Thumbnail Width')) !!}
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="mb-3">
         @php
         for ($i=1; $i <=50 ; $i++) { 
            $extra_fields[$i] = $i;
         }
         @endphp
         {!! Form::label('extra_fields', 'Extra Fields', ['class' => '']) !!}
         {!! Form::select('extra_fields', [''=>'Select Extra Fields']+$extra_fields, null, array('class'=>'form-control', 'id'=>'extra_fields')) !!}
      </div>
   </div>
</div>
@php
$field_types = array(
'text' => 'text',
'textarea' => 'textarea',
'number' => 'number',
'select' => 'select',
'date' => 'date',
'color' => 'color',
'time' => 'time',
'checkbox' => 'checkbox',
'file' => 'file',
);
@endphp
<?php 
$fields_list = array();
if(isset($module)){
   $fields_list = $module->fields()->pluck('field')->toArray(); 
}


?>
<div class="row">
   @for ($i=1; $i <=50 ; $i++)
   <div class="col-md-12 extra_field_title" style="display: none;">
      <hr>
      <div class="mb-3">
         {!! Form::label('extra_field_title_'.$i, 'Extra Field Title '.$i, ['class' => '']) !!}
         {!! Form::text('extra_field_title_'.$i, null, array('class'=>'form-control', 'id'=>'extra_field_title_'.$i, 'placeholder'=>'Extra Field Title '.$i)) !!}
      </div>
   </div>
   <div class="col-md-6 extra_field_title" style="display: none;">
      <div class="mb-3">
         {!! Form::label('extra_field_type_'.$i, 'Extra Field Type '.$i, ['class' => '']) !!}
         {!! Form::select('extra_field_type_'.$i, [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_'.$i)) !!}
      </div>
   </div>
   <div class="col-md-6 extra_field_title" style="display: none;">
      <div class="mb-3">
         {!! Form::label('extra_field_attr_'.$i, 'Extra Field '.$i.' Attr', ['class' => '']) !!}
         {!! Form::select('extra_field_attr_'.$i, [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_'.$i)) !!}
      </div>
   </div>
   <div class="col-md-4 extra_field_title" style="display: none;">
      <div class="mb-3">
         {!! Form::label('extra_field_sort_'.$i, 'Extra Field '.$i.' Sort', ['class' => '']) !!}
         {!! Form::number('extra_field_sort_'.$i, null, array('class'=>'form-control', 'id'=>'extra_field_sort_'.$i, 'placeholder'=>'Extra Field '.$i.' Sort')) !!}
      </div>
   </div>
   <div class="col-md-4 extra_field_title" style="display: none;">
      <div class="mb-3">
         {!! Form::label('extra_field_col_'.$i, 'Extra Field '.$i.' Col Class', ['class' => '']) !!}
         {!! Form::number('extra_field_col_'.$i, null, array('class'=>'form-control', 'id'=>'extra_field_col_'.$i, 'placeholder'=>'Extra Field '.$i.' Col Class')) !!}
      </div>
   </div>
   <div class="col-md-4 extra_field_title" style="display: none;">
      <div class="mb-3">
         {!! Form::label('extra_field_max_length_'.$i, 'Extra Field '.$i.' Max Length', ['class' => '']) !!}
         {!! Form::number('extra_field_max_length_'.$i, null, array('class'=>'form-control', 'id'=>'extra_field_max_length_'.$i, 'placeholder'=>'Extra Field '.$i.' Max Length')) !!}
      </div>
   </div>
   <div class="col-md-4 extra_field_title" style="display: none;">
      <div class="mb-3">
         {!! Form::label('extra_field_required_'.$i, 'Is Extra Field '.$i.' Required?', ['class' => '']) !!}
         {!! Form::select('extra_field_required_'.$i, $fields, null, array('class'=>'form-control', 'id'=>'extra_field_required_'.$i)) !!}
      </div>
   </div>
   <div class="col-md-4 extra_field_title" style="display: none;">
      <div class="mb-3">
         {!! Form::label('extra_field_required_message_'.$i, 'Extra Field '.$i.' Required Message', ['class' => '']) !!}
         {!! Form::text('extra_field_required_message_'.$i, null, array('class'=>'form-control', 'id'=>'extra_field_required_message_'.$i, 'placeholder'=>'Extra Field '.$i.' Required Message')) !!}
      </div>
   </div>
   <div class="col-md-4 extra_field_title" style="display: none;">
      <div class="mb-3">
         {!! Form::label('extra_field_show_'.$i, 'Is Extra Field '.$i.' show?', ['class' => '']) !!}
         {!! Form::select('extra_field_show_'.$i, $fields, null, array('class'=>'form-control', 'id'=>'extra_field_show_'.$i)) !!}
      </div>
   </div> 

   <div class="col-md-12 extra_field_title" style="display: none;">
      <div class="mb-3">
         {!! Form::label('extra_field_show_'.$i, 'Is Extra Field '.$i.' show in listing?', ['class' => '']) !!}
         {!! Form::select('extra_field_show_in_list_'.$i, $fields, in_array('extra_field_'.$i,$fields_list)?1:0, array('class'=>'form-control', 'id'=>'extra_field_show_in_list_'.$i)) !!}
      </div>
   </div>
   @endfor
   
</div>
@push('js')
<script type="text/javascript">
   extrafields("{{old('extra_fields', (isset($module))? $module->extra_fields:'')}}");
    $('#extra_fields').on('change',function(){
        extrafields($(this).val());
    })
    function extrafields(val){
        $('.extra_field_title').hide();
        for (var i = 1; i <= val; i++) {
            $('#extra_field_title_'+i).parent().parent().show(); 
            $('#extra_field_type_'+i).parent().parent().show(); 
            $('#extra_field_attr_'+i).parent().parent().show(); 
            $('#extra_field_sort_'+i).parent().parent().show(); 
            $('#extra_field_col_'+i).parent().parent().show(); 
            $('#extra_field_max_length_'+i).parent().parent().show(); 
            $('#extra_field_required_'+i).parent().parent().show(); 
            $('#extra_field_required_message_'+i).parent().parent().show(); 
            $('#extra_field_show_'+i).parent().parent().show(); 
            $('#extra_field_show_in_list_'+i).parent().parent().show(); 
        }
    }
   
   
    show_thumb("{{old('is_image', (isset($module))? $module->is_image:'')}}");
   
    $('#is_image').on('change',function(){
   
        show_thumb($(this).val());
   
    })
   
   
   
    function show_thumb(val){
   
        if(val==1){
   
            $('.image_section').show();
   
        }else{
   
            $('.image_section').hide();
   
        }
   
    }
   
   
   
   
   
</script>
@endpush