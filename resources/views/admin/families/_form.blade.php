<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                  <i class="fa fa-user fa-lg"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Full Name')}}" name="full_name" @if(isset($user)) value="{{$user['full_name']}}" @endif required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                  <i class="fas fa-address-card"></i>
              </span>
            </div>
            <input type="number" class="form-control" placeholder="{{__('NIK')}}" name="nik" @if(isset($user)) value="{{$user['nik']}}" @endif required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fas fa-venus-mars" aria-hidden="true"></i>
              </span>
            </div>
            <select name="gender" id="gender" class="form-control" required>
                @if(isset($user))
                    <option value="laki-laki" @if($user["gender"]=='laki-laki') selected @endif>Laki-laki</option>
                    <option value="perempuan" @if($user["gender"]=='perempuan') selected @endif>Perempuan</option>
                @endif 
                @if(!isset($user))
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                @endif 
            </select>   
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Birth Place')}}" name="birth_place" @if(isset($user)) value="{{$user['birth_place']}}" @endif required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
              </span>
            </div>
            <input type="date" class="form-control" placeholder="{{__('Birth Date')}}" name="birth_date" @if(isset($user)) value="{{$user['birth_date']}}" @endif required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fas fa-pray fa-lg" aria-hidden="true"></i>
              </span>
            </div>
            <select name="religion" id="gender" class="form-control" required>
            @if(isset($user))
                <option value="Islam" @if($user["religion"]=='Islam') selected @endif>Islam</option>
                <option value="Kristen" @if($user["religion"]=='Kristen') selected @endif>Kristen</option>
                <option value="Katholik" @if($user["religion"]=='Katholik') selected @endif>Katholik</option>
                <option value="Hindu" @if($user["religion"]=='Hindu') selected @endif>Hindu</option>
                <option value="Budha" @if($user["religion"]=='Budha') selected @endif>Budha</option>
                <option value="Konghuchu" @if($user["religion"]=='Konghuchu') selected @endif>Konghuchu</option>
            @endif 
            @if(!isset($user))
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katholik">Katholik</option>
                <option value="Budha">perempuan</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
            @endif 
            </select>   
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
              </span>
            </div>
            <select name="education" id="gender" class="form-control" required>
            @if(isset($user))
                <option value="Tidak/Belum Sekolah" @if($user["education"]=='Tidak/Belum Sekolah') selected @endif>Tidak/Belum Sekolah</option>
                <option value="Belum Tamat SD/Sederajat" @if($user["education"]=='Belum Tamat SD/Sederajat') selected @endif>Belum Tamat SD/Sederajat</option>
                <option value="Tamat SD/Sederajat" @if($user["education"]=='Tamat SD/Sederajat') selected @endif>Tamat SD/Sederajat</option>
                <option value="SLTP/Sederajat" @if($user["education"]=='SLTP/Sederajat') selected @endif>SLTP/Sederajat</option>
                <option value="SLTA/Sederajat" @if($user["education"]=='SLTA/Sederajat') selected @endif>SLTA/Sederajat</option>
                <option value="Diploma I / II" @if($user["education"]=='Diploma I / II') selected @endif>Diploma I / II</option>
                <option value="Akademi/ Diploma III/S. Muda" @if($user["education"]=='Akademi/ Diploma III/S. Muda') selected @endif>Akademi/ Diploma III/S. Muda</option>
                <option value="Diploma IV/ Strata I" @if($user["education"]=='Diploma IV/ Strata I') selected @endif>Diploma IV/ Strata I</option>
                <option value="Strata III" @if($user["education"]=='Strata III') selected @endif>Strata III</option>
            @endif 
            @if(!isset($user))
                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                <option value="Diploma I / II">Diploma I / II</option>
                <option value="Akademi/ Diploma III/S. Muda">Akademi/ Diploma III/S. Muda</option>
                <option value="Diploma IV/ Strata I">Diploma IV/ Strata I</option>
                <option value="Strata II">Strata II</option>
                <option value="Strata III">Strata III</option>
            @endif 
            </select>   
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
              </span>
            </div>
            <select name="user" id="user" class="form-control" required>
            @if(isset($user))
                <option value="Kepala Keluarga" @if($user["user"]=='Kepala Keluarga') selected @endif>Kepala Keluarga</option>
                <option value="Suami" @if($user["user"]=='Suami') selected @endif>Suami</option>
                <option value="Istri" @if($user["user"]=='Istri') selected @endif>Istri</option>
                <option value="Anak" @if($user["user"]=='Anak') selected @endif>Anak</option>
                <option value="Menantu" @if($user["user"]=='Menantu') selected @endif>Menantu</option>
                <option value="Cucu" @if($user["user"]=='Cucu') selected @endif>Cucu</option>
                <option value="Orang Tua" @if($user["user"]=='Orang Tua') selected @endif>Orang Tua</option>
                <option value="Mertua" @if($user["user"]=='Mertua') selected @endif>Mertua</option>
                <option value="Famili Lain" @if($user["user"]=='Famili Lain') selected @endif>Famili Lain</option>
                <option value="Pembantu" @if($user["user"]=='Pembantu') selected @endif>Pembantu</option>
            @endif 
            @if(!isset($user))
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Suami">Suami</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
                <option value="Menantu">Menantu</option>
                <option value="Cucu">Cucu</option>
                <option value="Orang Tua">Orang Tua</option>
                <option value="Mertua">Mertua</option>
                <option value="Famili Lain">Famili Lain</option>
                <option value="Pembantu">Pembantu</option>
            @endif 
            </select>   
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-briefcase fa-lg" aria-hidden="true"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Job')}}" name="job" @if(isset($user)) value="{{$user['job']}}" @endif required>
        </div>
    </div>
</div>
@if($userRole['role']['id']==1)
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
              </span>
            </div>
            <select name="user_id" id="user_id" class="form-control" required>
                @if(!isset($user))
                    @foreach($users as $u)
                        <option value="{{$u['id']}}">{{$u['email']}}</option>
                    @endforeach
                @endif 
                @if(isset($user))
                    @foreach($users as $u)
                        <option value="{{$u['id']}}" @if($user["user_id"]==$u['id']) selected @endif>{{$u['email']}}</option>
                    @endforeach
                @endif
            </select>   
        </div>
    </div>
</div>
@endif