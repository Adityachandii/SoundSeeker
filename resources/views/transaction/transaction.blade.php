@extends('layouts.mainuser')
@section('title', 'Transaction Page')

@section('content')
    @foreach ($transaction as $item)
        {{ $item->transaction_date }}<br>
        {{ $item->eventname }}<br>
        {{ $item->singleprice }}<br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Payment
        </button>
        <form action={{ route('DeleteItem', ['id' => $item->transaction_id]) }} method="POST">
            @method('delete')
            @csrf
            <button class="btn btn-delete">Delete</button>
        </form>

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
                       Total Pembayaran: Rp. {{number_format($item->singleprice)}}
                        <form method="POST" action="/proses-form">
                            @csrf
                            <input type="radio" id="gopay" name="pembayaran" value="gopay" checked>
                            <label for="gopay">Gopay</label>

                            <input type="radio" id="ovo" name="pembayaran" value="ovo" checked>
                            <label for="ovo">Ovo</label>

                            <input type="radio" id="BCA" name="pembayaran" value="BCA" checked>
                            <label for="BCA">BCA</label>

                        </form>
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
