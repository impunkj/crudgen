<!-- Dateofadmission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateOfAdmission', 'Dateofadmission:') !!}
    {!! Form::text('dateOfAdmission', null, ['class' => 'form-control','id'=>'dateOfAdmission']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateOfAdmission').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Timeofadmission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timeOfAdmission', 'Timeofadmission:') !!}
    {!! Form::text('timeOfAdmission', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 56,'maxlength' => 56]) !!}
</div>

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateOfBirth', 'Dateofbirth:') !!}
    {!! Form::text('dateOfBirth', null, ['class' => 'form-control','id'=>'dateOfBirth']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateOfBirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Ip Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('IP', 'Ip:') !!}
    {!! Form::textarea('IP', null, ['class' => 'form-control']) !!}
</div>

<!-- Proposedoperation Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('proposedOperation', 'Proposedoperation:') !!}
    {!! Form::textarea('proposedOperation', null, ['class' => 'form-control']) !!}
</div>

<!-- Preoperativediagnosis Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('preOperativeDiagnosis', 'Preoperativediagnosis:') !!}
    {!! Form::textarea('preOperativeDiagnosis', null, ['class' => 'form-control']) !!}
</div>

<!-- Bp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BP', 'Bp:') !!}
    {!! Form::text('BP', null, ['class' => 'form-control','maxlength' => 56,'maxlength' => 56]) !!}
</div>

<!-- Hr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('HR', 'Hr:') !!}
    {!! Form::text('HR', null, ['class' => 'form-control','maxlength' => 56,'maxlength' => 56]) !!}
</div>

<!-- Sao2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sao2', 'Sao2:') !!}
    {!! Form::text('sao2', null, ['class' => 'form-control','maxlength' => 56,'maxlength' => 56]) !!}
</div>

<!-- Height Field -->
<div class="form-group col-sm-6">
    {!! Form::label('height', 'Height:') !!}
    {!! Form::text('height', null, ['class' => 'form-control','maxlength' => 56,'maxlength' => 56]) !!}
</div>

<!-- Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('weight', 'Weight:') !!}
    {!! Form::text('weight', null, ['class' => 'form-control','maxlength' => 56,'maxlength' => 56]) !!}
</div>

<!-- Bmi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BMI', 'Bmi:') !!}
    {!! Form::text('BMI', null, ['class' => 'form-control','maxlength' => 56,'maxlength' => 56]) !!}
</div>

<!-- Asaphysicalstatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ASAPhysicalStatus', 'Asaphysicalstatus:') !!}
    {!! Form::text('ASAPhysicalStatus', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>