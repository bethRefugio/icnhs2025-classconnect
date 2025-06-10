@extends('layouts.app', ['page' => __('Edit Subject'), 'pageSlug' => 'subjects', 'pageParent' => 'Subject'])

@section('content')
    <div class="row">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Edit Subject') }}</h5>
                </div>
                <form method="post" action="{{ route('subject.update', $subject) }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('subject_name') ? ' has-danger' : '' }}">
                                <label>{{ _('Subject Name') }}</label>
                                <input type="text" name="subject_name" class="form-control{{ $errors->has('subject_name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter subject name') }}" value="{{ old('subject_name', $subject->subject_name) }}">
                                @include('alerts.feedback', ['field' => 'subject_name'])
                            </div>

                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"> <i class="fas fa-save"></i> {{ _('Save') }}</button>
                        <a href="/subject" class="btn btn-fill btn-default"> <i class="tim-icons icon-simple-remove"></i> {{ _('Close') }}</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
