@extends('layouts.mainuser')
@section('title', 'Transaction Page')

@section('content')
    @foreach ($transaction as $item)
        <div class="d-flex justify-content-between align-items-center mt-3 mx-5 my-3 p-3 rounded" style="border: 3px solid black">
            {{-- <h6>{{ $item->transaction_date }}</h6> --}}
            <img src="{{asset($item->poster)}}" alt="" width="200px" height="200px" class="rounded">
            <div class="">
                <h1>{{ $item->eventname }}</h1><br>
                <div class="">
                    <h6>Tanggal Event : {{ $item->startdate }}</h6> <br>
                </div>
            </div>
            <div class="">
                <h1>Rp. {{ number_format($item->singleprice) }}</h1><br>
            </div>
            <div class="">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                    Payment
                </button>
            </div>
            <form action={{ route('DeleteItem', ['id' => $item->transaction_id]) }} method="POST">
                @method('delete')
                @csrf
                <button class="btn btn-delete">Delete</button>
            </form>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Pembayaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       Biaya Event : Rp. {{number_format($item->singleprice)}} <br>
                       Pajak 10% : Rp. {{number_format($item->singleprice*0.1)}} <br> <br>
                       <h3>Total Pembayaran: Rp. {{ number_format($item->singleprice + ($item->singleprice * 0.1)) }} </h3> <br>
                       <div class="dropdown-divider"></div>
                       Metode Pembayaran:
                       <div class="row">
                           <form method="POST" action="/proses-form">
                               @csrf
                               <input type="radio" id="gopay" name="pembayaran" value="gopay" class="mx-2" checked>
                               <label for="gopay"> GOPAY</label>

                               <input type="radio" id="ovo" name="pembayaran" value="ovo" class="mx-2" checked>
                               <label for="ovo"> OVO</label>

                               <input type="radio" id="BCA" name="pembayaran" value="BCA" class="mx-2" checked>
                               <label for="BCA"> BCA</label>
                           </form>
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action={{route('CheckoutItem', ['id' => $item->transaction_id])}} method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Bayar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    @endforeach
@endsection
