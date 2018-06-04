<?php
include "header.php";
include "includes/config.php";
$index = mysqli_query($koneksi,"SELECT * FROM alternatif");
$index2 = mysqli_query($koneksi,"SELECT * FROM alternatif");
?>	
	<br>
	<div class="container">
	  <h1 class="display-5 text-center" id="judul">
	  	  Sistem Pendukung Keputusan Metode SAW <br>(Simple Additive Weighting)
      </h1>
	   <p class="text-justify"> Simple Additive Weighting (SAW) Salah satu metode yang digunakan untuk menyelesaikan masalah dari Fuzzy Multiple Attribute Decision Making ( FMADM ) adalah metode Simple Additive Weighting (SAW) yaitu suatu metode yang digunakan untuk mencari alternatif optimal dari sejumlah alternatif dengan kriteria tertentu.</p>
	</div>
	<br>
	<div style="width: 700px; box-sizing: border-box; margin: 0 auto;">
		<canvas id="myChart"></canvas>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
    	
        labels: [<?php while ($row = mysqli_fetch_array($index)) {
        	echo '"'.$row['nama_alternatif']. '",'; }?>],
        datasets: [{
            data: [<?php while ($row2 = mysqli_fetch_array($index2)) {
        	echo $row2['hasil_alternatif']. ","; }?>],

            label: 'Grafik Perangkingan',
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: { 
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<?php  
include "footer.php";
?>