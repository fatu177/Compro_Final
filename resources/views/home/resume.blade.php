<div class="section-title">
    <h2>Resume</h2>
</div>
<h3 class="resume-title">Education</h3>
<div class="row">

    <div class="col-lg-6">

        <!-- Loop PHP: Generate the first half of educations -->
        @php
        $c = 0;
        if ($education->count() % 2 == 1) {
        $c++;
        }
        @endphp
        @for ($i = 0; $i < ($education->count() + $c) / 2; $i++)

            <div class='resume-item'>



                <h5>{{ date('Y', strtotime($education[$i]->start_date)) }} -
                    @if (date('Y') == date('Y', strtotime($education[$i]->end_date)))
                    Present
                    @else
                     {{ date('Y', strtotime($education[$i]->end_date)) }}
                    @endif</h5>
                <h4>{{ $education[$i]->school_name }}</h4>
                <p><em>{{ $education[$i]->degree }} {{ $education[$i]->field_of_study }}</em></p>
                <p>{{ $education[$i]->description }}</p>
            </div>
            @endfor
    </div>
    <div class="col-lg-6">
        <!-- Loop PHP: Generate the second half of educations -->
        @for ($i = ($education->count() + $c) / 2; $i < $education->count(); $i++)
            <div class='resume-item'>



                <h5>{{ date('Y', strtotime($education[$i]->start_date)) }} - @if (date('Y') == date('Y', strtotime($education[$i]->end_date)))
                    Present
                    @else
                     {{ date('Y', strtotime($education[$i]->end_date)) }}
                    @endif</h5>
                <h4>{{ $education[$i]->school_name }}</h4>
                <p><em>{{ $education[$i]->degree }} {{ $education[$i]->field_of_study }}</em></p>
                <p>{{ $education[$i]->description }}</p>
            </div>
            @endfor
    </div>
</div>

<h3 class="resume-title">Experiene</h3>
<div class="row">

    <div class="col-lg-6">

        <!-- Loop PHP: Generate the first half of educations -->
        @php
        $c = 0;
        if ($experience->count() % 2 == 1) {
        $c++;
        }
        @endphp
        @for ($i = 0; $i < ($experience->count() + $c) / 2; $i++)

            <div class='resume-item'>



                <h5>{{ date('d F Y', strtotime($experience[$i]->start_date)) }} -

                    @if (date('Y-m-d') == $experience[$i]->end_date)
                    Present
                    @else
                     {{ date('d F Y', strtotime($experience[$i]->end_date)) }}
                    @endif
                </h5>
                <h4>{{ $experience[$i]->company_name }}</h4>
                <p><em>{{ $experience[$i]->position }}</em></p>
                <p>{{ $experience[$i]->description }}</p>
            </div>
            @endfor
    </div>
    <div class="col-lg-6">
        <!-- Loop PHP: Generate the second half of experiences -->
        @for ($i = ($experience->count() + $c) / 2; $i < $experience->count(); $i++)
            <div class='resume-item'>



                <h5>{{ date('d F Y', strtotime($experience[$i]->start_date)) }} -
                    @if (date('Y-m-d') == $experience[$i]->end_date)
                    Present
                    @else
                     {{ date('d F Y', strtotime($experience[$i]->end_date)) }}
                    @endif
                </h5>
                <h4>{{ $experience[$i]->company_name }}</h4>
                <p><em>{{ $experience[$i]->position }}</em></p>
                <p>{{ $experience[$i]->description }}</p>
            </div>
            @endfor
    </div>
</div>
