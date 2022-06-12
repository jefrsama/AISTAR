
<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Последняя продукция</h2>




                </div>
            </div>


            @foreach($data as $product)

            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
                    <div class="down-content">
                        <a href="#"><h4>{{$product->title}}</h4></a>
                        <h6>{{$product->price}} тг</h6>
                        <p>{{$product->description}}</p>

                        <form action="{{url('addcart',$product->id)}}" method="post">

                            @csrf
                            <input type="number" value="1" min="1" class="form-control" style="width: 100px;" name="quantity">
                            <br>
                            <input class="btn btn-primary" type="submit" value="Добавить в корзину">

                        </form>

                    </div>
                </div>
            </div>

            @endforeach


            @if(method_exists($data,'links'))

            <div class="d-flex justify-content-center">

                {!! $data->links() !!}


            </div>
                @endif

        </div>
    </div>
</div>
