@extends('layouts.adminApp')

@section('content')
<section class="item content mb-5">
    <div class="container toparea1">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h4 style="color: #8B0000; font-weight:bold" >Type of Service</h4><br>
                        <table class="table table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Service Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($jenisServices as $jenisService)
                                <tr class="text-center">
                                    <td style="color: #444;">{{ $no++ }}</td>
                                    <td style="color: #444;">{{ $jenisService->name }}</td>
                                    <td style="color: #444;">Rp {{ number_format($jenisService->price) }}</td>
                                    <td>
                                        <form method="post" action="{{ url('/TypeService') }}/{{ $jenisService->id }}">
                                            @csrf
                                            <button type="submit" class="btn" align="left" style="background: #8B0000; color: white;">Add</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection