<?php include 'head.php' ?>
<script type="text/javascript">$(document).ready(function(){ 
    if(window.innerWidth > 1000){var place=10}
    else{var place = 2}

var chart = c3.generate({
    padding:{right:10},
    legend:{hide:true},

    data: {
        x: 'x',

//        xFormat: '%Y%m%d', // 'xFormat' can be used as custom format of 'x'
        columns: [
            ['x',
            '2004-01-01',
            '2004-02-01',
            '2004-03-01',
            '2004-04-01',
            '2004-05-01',
            '2004-06-01',
            '2004-07-01',
            '2004-08-01',
            '2004-09-01',
            '2004-10-01',
            '2004-11-01',
            '2004-12-01',

            '2005-01-01',
            '2005-02-01',
            '2005-03-01',
            '2005-04-01',
            '2005-05-01',
            '2005-06-01',
            '2005-07-01',
            '2005-08-01',
            '2005-09-01',
            '2005-10-01',
            '2005-11-01',
            '2005-12-01',

            '2006-01-01',
            '2006-02-01',
            '2006-03-01',
            '2006-04-01',
            '2006-05-01',
            '2006-06-01',
            '2006-07-01',
            '2006-08-01',
            '2006-09-01',
            '2006-10-01',
            '2006-11-01',
            '2006-12-01',

            '2007-01-01',
            '2007-02-01',
            '2007-03-01',
            '2007-04-01',
            '2007-05-01',
            '2007-06-01',
            '2007-07-01',
            '2007-08-01',
            '2007-09-01',
            '2007-10-01',
            '2007-11-01',
            '2007-12-01',

            '2008-01-01',
            '2008-02-01',
            '2008-03-01',
            '2008-04-01',
            '2008-05-01',
            '2008-06-01',
            '2008-07-01',
            '2008-08-01',
            '2008-09-01',
            '2008-10-01',
            '2008-11-01',
            '2008-12-01',

            '2009-01-01',
            '2009-02-01',
            '2009-03-01',
            '2009-04-01',
            '2009-05-01',
            '2009-06-01',
            '2009-07-01',
            '2009-08-01',
            '2009-09-01',
            '2009-10-01',
            '2009-11-01',
            '2009-12-01',

            '2010-01-01',
            '2010-02-01',
            '2010-03-01',
            '2010-04-01',
            '2010-05-01',
            '2010-06-01',
            '2010-07-01',
            '2010-08-01',
            '2010-09-01',
            '2010-10-01',
            '2010-11-01',
            '2010-12-01',

            '2011-01-01',
            '2011-02-01',
            '2011-03-01',
            '2011-04-01',
            '2011-05-01',
            '2011-06-01',
            '2011-07-01',
            '2011-08-01',
            '2011-09-01',
            '2011-10-01',
            '2011-11-01',
            '2011-12-01',

            '2012-01-01',
            '2012-02-01',
            '2012-03-01',
            '2012-04-01',
            '2012-05-01',
            '2012-06-01',
            '2012-07-01',
            '2012-08-01',
            '2012-09-01',
            '2012-10-01',
            '2012-11-01',
            '2012-12-01',

            '2013-01-01',
            '2013-02-01',
            '2013-03-01',
            '2013-04-01',
            '2013-05-01',
            '2013-06-01',
            '2013-07-01',
            '2013-08-01',
            '2013-09-01',
            '2013-10-01',
            '2013-11-01',
            '2013-12-01',

            ],
            
            ['Reports', 
            /*2004*/
            13208, 
            15652, 
            21493, 
            11915, 
            11610, 
            20635,
            18126,
            16778,
            24619,
            15524,
            16539,
            19142,

            /*2005*/
            19438, 
            22652, 
            24493, 
            25915, 
            27610, 
            24635,
            29126,
            32778,
            28619,
            31524,
            26539,
            24103,

            /*2006*/
            25871, 
            27652, 
            29493, 
            31915, 
            33610, 
            37635,
            34126,
            27778,
            29619,
            25524,
            32539,
            36263,

            /*2007*/
            34819, 
            32918, 
            38209, 
            36728, 
            34918, 
            39209,
            44728,
            34928,
            31093,
            44293,
            39198,
            45691,

            /*2008*/
            44273, 
            41029, 
            44201, 
            34298, 
            31928, 
            33289,
            37289,
            41928,
            40192,
            39289,
            40981,
            42044,

            /*2009*/
            44283, 
            38293, 
            41029, 
            46293, 
            39278, 
            36729,
            41928,
            40982,
            37192,
            39827,
            42102,
            40605,

            /*2010*/
            43512, 
            47692, 
            39042, 
            49820, 
            48172, 
            43210,
            51293,
            53281,
            49882,
            54102,
            51892,
            56388,

            /*2011*/
            52413, 
            54315, 
            55237, 
            49283, 
            36514, 
            42198,
            51293,
            48756,
            47256,
            43109,
            41289,
            41112,

            /*2012*/
            52163, 
            42374, 
            47625, 
            49826, 
            52178, 
            53420,
            47625,
            44586,
            37185,
            47102,
            52876,
            43102,

            /*2013*/
            54687, 
            62938, 
            47329, 
            52648, 
            69453, 
            63214,
            59876,
            77672,
            52103,
            64758,
            69874,
            71712,
            ]
        ]
    },
    axis: {
        x: {
            type: 'timeseries',
            culling:20,
            tick: {
                format: '%Y',
                count:place,
                culling:false
            }
        }
    },
    tooltip: {
        /*format: {
            title: function (d) { return d; },
            value: function (value, ratio, id) {
                var format = id === 'data1' ? d3.format(',') : d3.format('');
                return format(value);
            }
        }*/
        //FIGURE OUT HOW TO FORMAT MONTH AND YEAR SEPARATE FROM TICK ABOVE WHICH IS SETTING YEAR UNIVERSALLY
    },
    point: {
        r:0
    }
});

});</script>
<div class='left'>
    <div class='title'>DRUGS</div>
    <div class='left-nav adverse'>
        <span>Adverse events - <a href=''>Reference</a></span>
        <a class='chosen' href=''>Reports over time</a>
        <a href=''>Who reports?</a>
        <a href=''>Drugs Classes</a>
        <a href=''>Drug indications</a>
        <a href=''>Reported reactions</a>    
    </div>
    <div class='left-nav labeling'>
        <span>Labeling - <a href=''>Reference</a></span>
        <a href=''>Submissions over time</a>
        <a href=''>Routes of administration</a>
        <a href=''>Drug interactions</a>
    </div>
    <div class='left-nav enforcement'>
        <span>Enforcement reports - <a href=''>Reference</a></span>
        <a href=''>Enforcement reports over time</a>
        <a href=''>Who initiates?</a>
        <a href=''>Seriousness</a>
    </div>
</div>

<div class='right'>
    <div class='viz-title'>Adverse drugs event reports since 2004</div>
    <div class='viz-content'>
        This is the openFDA API endpoint for adverse drug events. An adverse event 
        is submitted to the FDA to report any undesirable experience associated with 
        the use of a drug, including serious drug side effects, product use errors, 
        product quality problems, and therapeutic failures.<br><br>
        Reporting of adverse events by healthcare professionals and consumers is 
        voluntary in the United States. Increases in the total number of adverse 
        events are likely caused by improved reporting. News, enforcement actions, 
        and other phenomena can also spur reporting.<br><br>
    </div>
    
    <div class='viz'>
        <div id="chart"></div>
    </div>
    <input class='in-url' type='text' value='https://api.fda.gov/drug/event.json?search=receivedate:[20040101+TO+20150101]&count=receivedate'>
    <input class='in-param in-one' type='text' value='receivedate:[20040101+TO+20150101]'>
    <input class='in-param in-two' type='text' value='receivedate'>
    <div class='vj-wrap'>
        <a href='https://api.fda.gov/drug/event.json?search=receivedate:[20040101+TO+20150101]&count=receivedate' class='view-json' target='_blank'>
            View JSON
        </a>
    </div>

    <div class='rq-wrap'>
        <a class='run-query'>
            Run Query
        </a>
    </div>

</div>

<?php include 'foot.php' ?>

<script type='text/javascript'>$(document).ready(function(){ 
    $('.drugs').css('color','#191919');
    $('body').css('background','white');

    $(window).on("resize", function () {
        var windowsize = $(this).width();
        if (windowsize > 800 && i === 0) {
            location.reload();
        } 
    });
});</script></body></html>
