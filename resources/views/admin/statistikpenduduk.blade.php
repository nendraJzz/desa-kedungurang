<x-app-layout>
    <div class="flex flex-col items-center justify-center min-h-screen pt-20">
        <h1 class="text-4xl font-bold mb-6 text-center">Statistik Data Penduduk</h1>
        
        <!-- Grafik dengan ukuran lebih besar -->
        <div class="w-80 h-80 mb-4"> <!-- Grafik 320x320 piksel -->
            <canvas id="populationChart"></canvas>
        </div>

        <!-- Informasi Penduduk -->
        <div class="text-center">
            <p class="text-lg font-medium">Total Penduduk: <span class="font-bold">6000</span></p>
            <p class="text-lg font-medium">Pria: <span class="font-bold">3000</span></p>
            <p class="text-lg font-medium">Wanita: <span class="font-bold">3000</span></p>
        </div>
    </div>
    <script>
      // Data penduduk
      const totalPenduduk = 6000;
      const pria = 3000;
      const wanita = 3000;

      const dataKependudukan = {
        SD: 1500,
        SMP: 1200,
        SMA: 1000,
        SMK: 800,
        Bekerja: 1500,
      };

      // Warna untuk setiap kategori
      const colors = [
        '#FF6384', // SD
        '#36A2EB', // SMP
        '#FFCE56', // SMA
        '#4BC0C0', // SMK
        '#9966FF'  // Bekerja
      ];

      // Grafik
      const ctx = document.getElementById('populationChart').getContext('2d');
      new Chart(ctx, {
        type: 'pie', // Tipe grafik
        data: {
          labels: Object.keys(dataKependudukan),
          datasets: [{
            data: Object.values(dataKependudukan),
            backgroundColor: colors,
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false, // Membebaskan proporsi grafik
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
</x-app-layout>
