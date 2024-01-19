<x-app-layout>   

    <div class="container-xl px-4">

        <div class="card mb-4">
             <livewire:components.header
                :title="'Add Widget Page'"
                :content="'Add New Widget Page'"
                :icon="'fa-school'"
                :term="__('Widget Page')"
                :slug="route('widget_pages')"
                :button="__('List Widget Pages')"
            />
            <div class="card-body">
                
               <div class="tab-content" id="nav-tabContent"> 
                <div class="tab-pane fade show active" id="nav-customer" role="tabpanel" aria-labelledby="nav-customer-tab">
                            
                           {!! Form::open(array('method' => 'post', 'route' => 'widget_pages.store', 'class' => 'form', 'files'=>true)) !!}
                           <div class="card-body">
                            <div class="border p-3">
                           @include('widget_pages.inc.form')
                           <br>
                           <div class="row">
                              <div class="col-md-5"></div>
                              <div class="col-md-4"><button type="submit" class="btn btn-primary">{{__('Create')}}</button></div>
                           </div>
                        </div>
                     </div>
                           
                        </div>

                     </div>
                  </div>
               </div>
            </div>
          </x-app-layout>