<?= $this->extend('layout')?>
<?= $this->section('content')?>

<h2>Laporan Dari Penjualan</h2>

<style>
  .chart-line {
    width: 100%;
    max-width: 700px;
    height: 300px;
    border-left: 2px solid #333;
    border-bottom: 2px solid #333;
    position: relative;
    margin: 30px auto;
    background: linear-gradient(to right, transparent 99%, #ccc 99%);
    background-size: 100px 100%;
  }

  .chart-line svg {
    position: absolute;
    bottom: 0;
    left: 0;
  }

  .chart-labels {
    display: flex;
    justify-content: space-between;
    max-width: 700px;
    margin: 0 auto;
    padding: 10px;
    font-size: 14px;
  }
</style>

<div class="chart-line">
  <svg width="100%" height="100%" viewBox="0 0 700 300" preserveAspectRatio="none">
    <polyline 
      fill="none"
      stroke="#007bff"
      stroke-width="3"
      points="0,250 100,200 200,150 300,180 400,100 500,150 600,120"
    />
    <!-- Titik -->
    <circle cx="0" cy="250" r="5" fill="#007bff" />
    <circle cx="100" cy="200" r="5" fill="#007bff" />
    <circle cx="200" cy="150" r="5" fill="#007bff" />
    <circle cx="300" cy="180" r="5" fill="#007bff" />
    <circle cx="400" cy="100" r="5" fill="#007bff" />
    <circle cx="500" cy="150" r="5" fill="#007bff" />
    <circle cx="600" cy="120" r="5" fill="#007bff" />
  </svg>
</div>

<div class="chart-labels">
  <span>Jan</span>
  <span>Feb</span>
  <span>Mar</span>
  <span>Apr</span>
  <span>Mei</span>
  <span>Jun</span>
  <span>Jul</span>
</div>

<div class="container mt-5">
  <h4>Data Grafik Pengunjung</h4>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>Bulan</th>
          <th>Pembeli</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Jan</td><td>250</td></tr>
        <tr><td>Feb</td><td>200</td></tr>
        <tr><td>Mar</td><td>150</td></tr>
        <tr><td>Apr</td><td>180</td></tr>
        <tr><td>Mei</td><td>100</td></tr>
        <tr><td>Jun</td><td>150</td></tr>
        <tr><td>Jul</td><td>120</td></tr>
      </tbody>
    </table>
  </div>
</div>


<?= $this->endSection() ?>