


<?php $__env->startSection('title','Aksitageh'); ?>

<?php $__env->startSection('container'); ?>
<section id="intro">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <div class="container">
        <div class="jumbotron">
            <div id="daerah">

            </div>
        </div>
    </div>
    <script>
        Highcharts.chart('daerah', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Data Pasien'
            },
            subtitle: {
                text: 'Sumatera Barat'
            },
            xAxis: {
                categories: [
                    <?php $__currentLoopData = $data_pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    '<?php echo e($pasien -> kelompok); ?>',
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
            },
            credits: {
                enabled: false
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                
                {
                
                name: 'Jumlah',
                data: 
                [
                    <?php $__currentLoopData = $data_pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($pasien -> jumlah); ?>,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                ]
              
            }
           ]
        });
    </script>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guesttemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RS\RS-Sumbar\resources\views/popup3.blade.php ENDPATH**/ ?>