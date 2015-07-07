<?php include 'head.php' ?>
<script type="text/javascript">$(document).ready(function(){ 
});</script>
<div class='rapper'>
    <div class='left'>
        <div class='title'>REFERENCE</div>
        <div class='left-nav adverse'>
            <span>Anatomy of a response</span>
            <a href='#meta'>Meta</a>
            <a href='#results'>Results</a>    
        </div>
        <div class='left-nav labeling'>
            <span>Filed-by-field reference</span>
            <a href='#header'>Header</a>
            <a href='#patient'>Patient</a>
        </div>
    </div>

    <div class='right right-ref'>
<h1>Anatomy of a response</h1>
<h2>This is a simulated openFDA API return for a non-count query. It is divided into two high-level sections, meta and results.</h2>
<pre class="prettyprint" style='display:block'>
{
  "meta": {
    "disclaimer": "openFDA is a beta research project and not for clinical use. <br>&nbsp;&nbsp;&nbsp;&nbsp;While we make every effort to ensure that data is accurate, you should assume all results are unvalidated.",
    "license": "http://open.fda.gov/license",
    "last_updated": "2014-08-01",
    "results": {
      "skip": 0,
      "limit": 1,
      "total": 1355
    }
  },
  "results": [
    {
      ...
    }
  ]
}
</pre>

<div class='sep'></div>

<h1 id='meta' style='padding-top:100px'>Meta</h1>
<h2>For non-count queries, the meta section includes a disclaimer, a link to the openFDA data license, and information about the results that follow.</h2>
<pre class="prettyprint" style='display:block'>
"meta": {
  "disclaimer": "openFDA is a beta research project and not for clinical use. While we make every effort to ensure that data is accurate, you should assume all results are unvalidated.",
  "license": "http://open.fda.gov/license",
  "last_updated": "2014-08-01",
  "results": {
    "skip": 0,
    "limit": 1,
    "total": 1355
}

meta.disclaimer
string
Important details about the openFDA beta and limitations of the dataset.
<br>
meta.license
string
Link to a web page with license terms that govern data within openFDA.
<br>
meta.last_updated
string
The last date when openFDA was updated. Note that this does not correspond to the last report date in the system. <br>Rather, it is the last time openFDA received a system or data update.
<br>
meta.results.skip
integer
Offset (page) of results, defined by the skip query parameter.
<br>
meta.results.limit
integer
Number of records in this return, defined by the limit query parameter. If there is no limit parameter, the API returns one result.
<br>
meta.results.total
integer
Total number of records matching the search criteria.
</pre>

<div class='sep'></div>

<h1 id='results' style='padding-top:100px'>Results</h1>
<h2>For non-count queries, the results section includes matching adverse event reports returned by the API.<br><br>
Each adverse event report consists of these major sections:<br><br>
<strong>Header:</strong> General information about the adverse event<br>
<strong>Patient Information:</strong> Details on the patient who experienced the event, such as age, weight, sex, etc.<br>
<strong>Drugs:</strong> Information on the drugs taken while the event was experienced<br>
<strong>Reactions:</strong> Information on the reactions experienced by the patient</h2>

<div class='sep'></div>

<h1 id='header' style='padding-top:100px'>Header</h1>
<h2>General information about the adverse event.</h2>
<pre class="prettyprint" style='display:block'>
"safetyreport": "1234567-8",
"safetyreportversion": "17",
"receivedate": "20041025",
"receivedateformat": "102",
"receiptdate": "20040224",
"receiptdateformat": "102",
"serious": "1",
"seriousnesscongenitalanomali": "1",
"seriousnessdeath": "1",
"seriousnessdisabling": "1"
"seriousnesshospitalization": "1",
"seriousnesslifethreatening": "1",
"seriousnessother": "1",
"transmissiondate": "1",
"transmissiondateformat": "1",
"duplicate": "1",
"companynumb": "200501050",
"occurcountry": "US",
"primarysourcecountry": "US"
"primarysource": {
  "qualification": "1",
  "reportercountry": "UNITED STATES"
},
"reportduplicate": {
  "duplicatesource": "NOVARTIS",
  "duplicatenumb": "PHEH2006US00792"
},
"sender": {
  "sendertype": "2",
  "senderorganization": "FDA-Public Use"
},
"receiver": {
  "receivertype": "6",
  "receiverorganization": "FDA"
}

</pre>

<div class='sep'></div>
<h1 id='patient' style='padding-top:100px'>Patient</h1>
<h2>Information about the patient in the adverse event report.</h2>
<pre class="prettyprint" style='display:block'>
patient: {
  "patientonsetage": "59",
  "patientonsetageunit": "801",
  "patientsex": "2",
  "patientweight": "78",
  "patientdeath": {
    "patientdeathdate": "20030401",
    "patientdeathdateformat": "102"
  },
    "drug": [
      {
        "actiondrug": "1",
        "drugadditional": "1",
        "drugcumulativedosagenumb": "4100",
        "drugcumulativedosageunit": "003",
        "drugdosageform": "Tablet",
        "drugintervaldosagedefinition": "804",
        "drugintervaldosageunitnumb": "1",
        "drugrecurreadministration": "3",
        "drugseparatedosagenumb": "1",
        "drugstructuredosagenumb": "600",
        "drugstructuredosageunit": "003",
        "drugadministrationroute": "048",
        "drugauthorizationnumb": "021223",
        "drugbatchnumb": "020113A",
        "drugcharacterization": "1",
        "drugdoseagetext": "3.5 MG/KG, 1 IN 1 AS NECESSARY, INTRAVENOUS DRIP",
        "drugenddate": "20020920",
        "drugenddateformat": "102",
        "drugindication": "RHEUMATOID ARTHRITIS",
        "drugstartdate": "20020903",
        "drugstartdateformat": "102",
        "drugtreatmentduration": "1",
        "drugtreatmentdurationunit": "804",
        "medicinalproduct": "ASCORBIC ACID",
        "openfda": {
          "spl_id": [
            "f67ce1df-27ea-4c67-a8a3-daf3fb3b9a92",
            "72133842-ac3f-4a39-a825-38e01930a0a7"
          ],
          "product_ndc": [
            "0389-0486",
            "67457-118",
            "67457-303"
          ],
          "route": [
            "INTRAMUSCULAR",
            "INTRAVENOUS",
            "SUBCUTANEOUS"
          ],
          "substance_name": [
            "ASCORBIC ACID"
          ],
          "rxcui": [
            "308395"
          ],
          "spl_set_id": [
            "a6c36a36-28ee-4a1b-86fe-98ef94064b68",
            "d05200cb-cf29-4bc7-bf0c-b42ab2d20958"
          ],
          "package_ndc": [
            "67457-118-50",
            "0389-0486-50",
            "67457-303-50"
          ],
          "product_type": [
            "HUMAN PRESCRIPTION DRUG"
          ],
          "generic_name": [
            "ASCORBIC ACID"
          ],
          "manufacturer_name": [
            "The Torrance Company",
            "Mylan Institutional LLC"
          ],
          "brand_name": [
            "ASCORBIC ACID"
          ]
        }
      }
    ],
    "reaction": [
      {
        "reactionmeddrapt": "Osteonecrosis of jaw",
        "reactionmeddraversionpt": "16.1",
        "reactionoutcome": "6"
      },
      {
        "reactionmeddrapt": "HYPERTENSION"
      },
      {
        "reactionmeddrapt": "POLYTRAUMATISM"
      }
    ]
  }
}
</pre>

    </div>
</div>

<?php include 'foot.php' ?>

<script type='text/javascript'>$(document).ready(function(){ 
    $('body').css('background','white');
    $('.view-json').click(function(){
        $('.prettyprint').slideDown();
        $('.view-json').hide();
        $('.close').css('display','inline-block');
    }); 

    $('.close').click(function(){
        $('.prettyprint').slideUp();
        $('.view-json').css('display','inline-block');
        $('.close').hide();
    }); 

    if(window.innerWidth > 1000)
    {
        var h = $('.right').height() + 10;
        $('.left').css('height', h);
    }

    $(window).on("resize", function () {
        var windowsize = $(this).width();
        if (windowsize > 840) {
            location.reload();
        } 
    });
});</script></body></html>
