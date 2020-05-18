<div class="modal fade" id="navMenuModal" tabindex="-1" role="dialog" aria-labelledby="navMenuModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="navMenuModal">Add Nav Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'NavMenuController@store', 'id'=>'addKey', 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                <div class="form-group col-md-6">
                    {!! Form::text('home', null, ['class'=>'form-control', 'placeholder'=>'Add Home Nav', 'id'=>'home']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('home_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Home Nav Ar', 'id'=>'home']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('about', null, ['class'=>'form-control', 'placeholder'=>'Add About Nav', 'id'=>'about']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('about_ar', null, ['class'=>'form-control', 'placeholder'=>'Add About Nav Ar', 'id'=>'about']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('what_we_do', null, ['class'=>'form-control', 'placeholder'=>'Add What We Do Nav', 'id'=>'what_we_do']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('what_we_do_ar', null, ['class'=>'form-control', 'placeholder'=>'Add What We Do Nav Ar', 'id'=>'what_we_do']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('fire', null, ['class'=>'form-control', 'placeholder'=>'Add Fire Nav', 'id'=>'fire']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('fire_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Fire Nav Ar', 'id'=>'fire']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('security', null, ['class'=>'form-control', 'placeholder'=>'Add Security Nav', 'id'=>'security']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('security_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Security Nav Ar', 'id'=>'security']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('water', null, ['class'=>'form-control', 'placeholder'=>'Add Water Nav', 'id'=>'water']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('water_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Water Nav Ar', 'id'=>'water']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('facility', null, ['class'=>'form-control', 'placeholder'=>'Add Facility Nav', 'id'=>'facility']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('facility_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Facility Nav Ar', 'id'=>'facility']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('projects', null, ['class'=>'form-control', 'placeholder'=>'Add Projects Nav', 'id'=>'projects']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('projects_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Projects Nav Ar', 'id'=>'projects']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('insights', null, ['class'=>'form-control', 'placeholder'=>'Add Insights Nav', 'id'=>'insights']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('insights_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Insights Nav Ar', 'id'=>'insights']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('news', null, ['class'=>'form-control', 'placeholder'=>'Add News Nav', 'id'=>'news']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('news_ar', null, ['class'=>'form-control', 'placeholder'=>'Add News Nav Ar', 'id'=>'news']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('case', null, ['class'=>'form-control', 'placeholder'=>'Add Case Study Nav', 'id'=>'case']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('case_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Case Study Nav Ar', 'id'=>'case']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('contact', null, ['class'=>'form-control', 'placeholder'=>'Add Contact Nav', 'id'=>'contact']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('contact_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Contact Nav Ar', 'id'=>'contact']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('search', null, ['class'=>'form-control', 'placeholder'=>'Add Search Nav', 'id'=>'search']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('search_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Search Nav Ar', 'id'=>'search']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('lang', null, ['class'=>'form-control', 'placeholder'=>'Add Language Nav', 'id'=>'lang']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('lang_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Language Nav Ar', 'id'=>'lang']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Nav Menu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
