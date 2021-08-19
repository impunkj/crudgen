<div class="table-responsive">
    <table class="table" id="patientInformations-table">
        <thead>
            <tr>
                <th>Dateofadmission</th>
        <th>Timeofadmission</th>
        <th>Name</th>
        <th>Dateofbirth</th>
        <th>Gender</th>
        <th>Ip</th>
        <th>Proposedoperation</th>
        <th>Preoperativediagnosis</th>
        <th>Bp</th>
        <th>Hr</th>
        <th>Sao2</th>
        <th>Height</th>
        <th>Weight</th>
        <th>Bmi</th>
        <th>Asaphysicalstatus</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patientInformations as $patientInformations)
            <tr>
                <td>{{ $patientInformations->dateOfAdmission }}</td>
            <td>{{ $patientInformations->timeOfAdmission }}</td>
            <td>{{ $patientInformations->name }}</td>
            <td>{{ $patientInformations->dateOfBirth }}</td>
            <td>{{ $patientInformations->gender }}</td>
            <td>{{ $patientInformations->IP }}</td>
            <td>{{ $patientInformations->proposedOperation }}</td>
            <td>{{ $patientInformations->preOperativeDiagnosis }}</td>
            <td>{{ $patientInformations->BP }}</td>
            <td>{{ $patientInformations->HR }}</td>
            <td>{{ $patientInformations->sao2 }}</td>
            <td>{{ $patientInformations->height }}</td>
            <td>{{ $patientInformations->weight }}</td>
            <td>{{ $patientInformations->BMI }}</td>
            <td>{{ $patientInformations->ASAPhysicalStatus }}</td>
            <td>{{ $patientInformations->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['patientInformations.destroy', $patientInformations->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patientInformations.show', [$patientInformations->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('patientInformations.edit', [$patientInformations->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
