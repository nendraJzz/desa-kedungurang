@extends('layouts.app')

@section('content')
  <div class="flex flex-col items-center justify-center min-h-screen pt-20">
      <h1 class="text-4xl font-bold mb-6 pt-5 text-center">Statistik Data Penduduk</h1>

      <div class="flex flex-col md:flex-row items-stretch justify-center gap-10 px-4 py-5">
          <div class="flex flex-col items-center bg-gray-100 p-6 rounded-lg shadow-lg w-full max-w-md">
              <div class="w-80 h-80 mb-6">
                  <canvas id="populationChart"></canvas>
              </div>
          </div>

          <div class="bg-white p-6 rounded-md shadow-lg w-full max-w-md flex flex-col">
              <h1 class="font-bold mb-6 text-2xl text-center">Tambahkan Statistik Penduduk</h1>
              <form method="POST" action="{{ route('penduduk.store') }}" class="flex-grow">
                  @csrf
                  <div class="mb-5">
                      <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                          Jumlah KK
                      </label>
                      <input type="text" id="jumlah_kepala_keluarga" name="jumlah_kepala_keluarga" placeholder="Masukkan Jumlah KK"
                          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-indigo-600 focus:shadow-md" />
                  </div>
                  <div class="mb-5">
                      <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                          Jumlah Pria
                      </label>
                      <input type="number" id="jumlah_pria" name="jumlah_pria"  placeholder="Masukkan Jumlah Pria"
                          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-indigo-600 focus:shadow-md" />
                  </div>
                  <div class="mb-5">
                      <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                          Jumlah Wanita
                      </label>
                      <input type="number" id="jumlah_wanita" name="jumlah_wanita" placeholder="Masukkan Jumlah Wanita"
                          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-indigo-600 focus:shadow-md" />
                  </div>
                  <div>
                      <button
                          class="hover:shadow-form w-full rounded-md bg-indigo-600 hover:bg-indigo-700 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                          Tambah Penduduk
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>

  <script>
    // Data penduduk
    const totalPenduduk = 6.838; 
    const pria = 3494;
    const wanita = 3344;

    const dataKependudukan = {
      SD: 1500,
      SMP: 1200,
      SMA: 1000,
      SMK: 800,
      Bekerja: 1500,
      Lansia: 500,  
    };

    const colors = [
      '#FF6384',  
      '#36A2EB',  
      '#FFCE56', 
      '#4BC0C0',  
      '#9966FF',  
      '#FF5733',  
    ];

    const ctx = document.getElementById('populationChart').getContext('2d');
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: Object.keys(dataKependudukan),  
        datasets: [{
          data: Object.values(dataKependudukan),  
          backgroundColor: colors, 
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'top',
          },
          tooltip: {
            callbacks: {
              label: function(tooltipItem) {
                const label = tooltipItem.label;
                const value = tooltipItem.raw;
                const percentage = ((value / totalPenduduk) * 100).toFixed(2);
                return `${label}: ${value} (${percentage}%)`;
              }
            }
          }
        }
      }
    });
</script>

@endsection
