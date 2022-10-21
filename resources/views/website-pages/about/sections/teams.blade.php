@php
    $team = array(
        ['img'=>'assets/img/team/team-1.jpg','twitter'=>'#','facebook'=>'#','instagram'=>'#','linkedin'=>'#','name'=>'Walter White','position'=>'Chief Executive Officer'],
        ['img'=>'assets/img/team/team-2.jpg','twitter'=>'#','facebook'=>'#','instagram'=>'#','linkedin'=>'#','name'=>'Sarah Jhonson','position'=>'Product Manager'],
        ['img'=>'assets/img/team/team-3.jpg','twitter'=>'#','facebook'=>'#','instagram'=>'#','linkedin'=>'#','name'=>'William Anderson','position'=>'CTO'],
        ['img'=>'assets/img/team/team-4.jpg','twitter'=>'#','facebook'=>'#','instagram'=>'#','linkedin'=>'#','name'=>'Amanda Jepson','position'=>'Accountant'],
    )
@endphp
<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Team</h2>

        </div>

        <div class="row gy-4">
            @foreach ( $team as $member )
                <div
                class="col-lg-3 col-md-6"
                data-aos="fade-up"
                data-aos-delay="{{ $loop->iteration * 100 }}">
                    @include('website-pages.about.sections.team-member',[
                        'img' => $member['img'],
                        'twitter' => $member['twitter'],
                        'facebook' => $member['facebook'],
                        'instagram' => $member['instagram'],
                        'linkedin' => $member['linkedin'],
                        'name' => $member['name'],
                        'position' => $member['position'],
                    ])
                </div>
            @endforeach


        </div>

    </div>
</section><!-- End Team Section -->
