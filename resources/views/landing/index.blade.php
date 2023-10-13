@extends('component.app')

@section('content')
  <div class="container mt-5">
    <h1>Data Gempa Bumi</h1>
    <div class="table">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Jam</th>
            <th scope="col">Lintang</th>
            <th scope="col">Bujur</th>
            <th scope="col">Magnitudo</th>
            <th scope="col">Kedalaman</th>
            <th scope="col">Wilayah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $quake->tanggal }}</td>
            <td>{{ $quake->jam }}</td>
            <td>{{ $quake->lintang }}</td>
            <td>{{ $quake->bujur }}</td>
            <td>{{ $quake->magnitude }}</td>
            <td>{{ $quake->kedalaman }}</td>
            <td>{{ $quake->dirasakan }}</td>
            <td>
              <a href="{{ $quake->shakemap }}" target="_blank">
                <img src="{{ $quake->shakemap }}" alt="shakemap" width="100px">
              </a>
            </td>
          </tr>
        </tbody>
      </table>  
      
    <h1>Data Cuaca Bandung</h1>
    <div class="table">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Jam</th>
            <th scope="col">Cuaca</th>
          </tr>
        </thead>
        <tbody>
          @foreach($weather->times as $dataWeather)
            <tr>
              <td>{{ date("d M Y" , strtotime($dataWeather->datetime)) }}</td>              
              <td>{{ $dataWeather->h }}</td>
              <td>{{ $dataWeather->name }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>  
    </div>
    
    <a href="{{ url('/landing/profile')}}" class="btn btn-primary">
      Profile
    </a>
  </div>
@endsection