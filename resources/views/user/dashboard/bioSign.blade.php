@extends('user.dashboard.master')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4"> 
                <h5 class="font-weight-bold">شرح حال و علائم</h5>
            </div>
            <hr>
            
            <form action="{{ route('user.bioSign.store') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="bio">توضیحات لازم</label>
                        <textarea class="form-control" name="bio" id="bio" rows="3">
                            {{ $bioSign->bio ?? '' }}
                        </textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="heartdisease">سابقه ی بیماری قلبی</label>
                        <select class="form-control" id="heartdisease" name="heartdisease">
                            <option value="0"> خیر </option>                            
                            <option value="1"> بله </option>                            
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="geneticdisease">سابقه ی بیماری ژنتیکی</label>
                        <select class="form-control" id="geneticdisease" name="geneticdisease">
                            <option value="0"> خیر </option>                            
                            <option value="1"> بله </option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="headache">سردرد</label>
                        <select class="form-control" id="headache" name="headache">
                            <option value="0"> خیر </option>                            
                            <option value="1"> بله </option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="diabete">دیابت</label>
                        <select class="form-control" id="diabete" name="diabete">
                            <option value="0"> خیر </option>                            
                            <option value="1"> بله </option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('user.create.profile') }}" 
                class="btn btn-dark mt-5 mr-3">
                    بازگشت
                </a>
            </form>
        </div>
    </div>  
      
@endsection