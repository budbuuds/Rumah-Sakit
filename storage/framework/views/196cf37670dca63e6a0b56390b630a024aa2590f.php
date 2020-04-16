


<?php $__env->startSection('title','Aksitageh'); ?>

<?php $__env->startSection('container'); ?>
<section id="intro">
<script src="https://code.highcharts.com/highcharts.js"></script>
<div class="panel">
    <div id="chart_kebutuhan">

    </div>
</div>
<script>
    Highcharts.chart('chart_kebutuhan', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Kebutuhan APD'
        },
        xAxis: {
            categories: [
                'Masker N95',
                'Masker Surgical',
                'Sarung Tangan',
                'Hazmat',
                'Faceshield',
                'Kacamata Goggles',
                'Boot and Shoe Cover',
                'Handsanitizer',
                'Desinfektan',
                'Multivitamin',
                'Kantong Jenazah',
                'Skorlet'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        credits: {
                enabled: false
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah Kebutuhan',
            data: [<?php echo e($count1); ?>,<?php echo e($count2); ?>,<?php echo e($count3); ?>,<?php echo e($count4); ?>,<?php echo e($count5); ?>,<?php echo e($count6); ?>,<?php echo e($count7); ?>,<?php echo e($count8); ?>,<?php echo e($count9); ?>,<?php echo e($count10); ?>,<?php echo e($count11); ?>,<?php echo e($count12); ?>]

        }]
    });
</script>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guesttemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RS\RS-Sumbar\resources\views/popup2.blade.php ENDPATH**/ ?>