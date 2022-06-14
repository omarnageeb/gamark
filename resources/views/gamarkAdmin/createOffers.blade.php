@extends('layouts.gamarkAdminLayout.admin')

@section('title','العروض')
@section('content')

                <div class="breadcrumb">
                    <ul>
                      <li>العروض</li>
                    </ul>
                </div>
                <div class="container">
                  <form class="marg" method="post" action="{{route('post.createOffers')}}">
                      @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">اسم العرض</label>
                      <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="اسم العرض">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">السعر</label>
                      <input type="number" class="form-control" name="price" placeholder="السعر">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">التفاصيل</label>
                      <input type="text" class="form-control" name="details"  placeholder="التفاصيل">
                    </div>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                  </form>
                </div>
              </div><!--end innerContent-->


@endsection
