
function stringToTitleCase(a) {
    return a.replace(/\w\S*/g, function(a) {
        return a.charAt(0).toUpperCase() + a.substr(1).toLowerCase()
    })
}

function numberToCommaSeparated(a) {
    return ("" + a).replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

function replaceCountryCode(a) {
    var e = {
        "": "No data",
        "*": "No answer provided",
        AA: "Aruba",
        AC: "Antigua and Barbuda",
        AE: "United Arab Emirates",
        AF: "Afghanistan",
        AG: "Algeria",
        AJ: "Azerbaijan",
        AL: "Albania",
        AM: "Armenia",
        AN: "Andorra",
        AO: "Angola",
        AQ: "American Samoa",
        AR: "Argentina",
        AS: "Australia",
        AT: "Ashmore and Cartier Islands",
        AU: "Austria",
        AV: "Anguilla",
        AX: "Akrotiri",
        AY: "Antarctica",
        BA: "Bahrain",
        BB: "Barbados",
        BC: "Botswana",
        BD: "Bermuda",
        BE: "Belgium",
        BF: "Bahamas, The",
        BG: "Bangladesh",
        BH: "Belize",
        BK: "Bosnia and Herzegovina",
        BL: "Bolivia",
        BM: "Burma",
        BN: "Benin",
        BO: "Belarus",
        BP: "Solomon Islands",
        BQ: "Navassa Island",
        BR: "Brazil",
        BS: "French Southern and Antarctic Lands Bassas da India",
        BT: "Bhutan",
        BU: "Bulgaria",
        BV: "Bouvet Island",
        BX: "Brunei",
        BY: "Burundi",
        CA: "Canada",
        CB: "Cambodia",
        CD: "Chad",
        CE: "Sri Lanka",
        CF: "Congo (Brazzaville)",
        CG: "Congo (Kinshasa)",
        CH: "China",
        CI: "Chile",
        CJ: "Cayman Islands",
        CK: "Cocos (Keeling) Islands",
        CM: "Cameroon",
        CN: "Comoros",
        CO: "Colombia",
        CQ: "Northern Mariana Islands",
        CR: "Coral Sea Islands",
        CS: "Costa Rica",
        CT: "Central African Republic",
        CU: "Cuba",
        CV: "Cape Verde",
        CW: "Cook Islands",
        CY: "Cyprus",
        DA: "Denmark",
        DJ: "Djibouti",
        DO: "Dominica",
        DQ: "Jarvis Island",
        DR: "Dominican Republic",
        DX: "Dhekelia",
        EC: "Ecuador",
        EG: "Egypt",
        EI: "Ireland",
        EK: "Equatorial Guinea",
        EN: "Estonia",
        ER: "Eritrea",
        ES: "El Salvador",
        ET: "Ethiopia",
        EU: "French Southern and Antarctic Lands Europa Island",
        EZ: "Czech Republic",
        FG: "French Guiana",
        FI: "Finland",
        FJ: "Fiji",
        FK: "Falkland Islands (Islas Malvinas)",
        FM: "Micronesia, Federated States of",
        FO: "Faroe Islands",
        FP: "French Polynesia",
        FQ: "Baker Island",
        FR: "France",
        FS: "French Southern and Antarctic Lands",
        GA: "Gambia, The",
        GB: "Gabon",
        GG: "Georgia",
        GH: "Ghana",
        GI: "Gibraltar",
        GJ: "Grenada",
        GK: "Guernsey",
        GL: "Greenland",
        GM: "Germany",
        GO: "French Southern and Antarctic Lands Glorioso Islands",
        GP: "Guadeloupe",
        GQ: "Guam",
        GR: "Greece",
        GT: "Guatemala",
        GV: "Guinea",
        GY: "Guyana",
        GZ: "Gaza Strip",
        HA: "Haiti",
        HK: "Hong Kong",
        HM: "Heard Island and McDonald Islands",
        HO: "Honduras",
        HQ: "Howland Island",
        HR: "Croatia",
        HU: "Hungary",
        IC: "Iceland",
        ID: "Indonesia",
        IM: "Isle of Man",
        IN: "India",
        IO: "British Indian Ocean Territory",
        IP: "Clipperton Island",
        IR: "Iran",
        IS: "Israel",
        IT: "Italy",
        IV: "CÃ´te d'Ivoire",
        IZ: "Iraq",
        JA: "Japan",
        JE: "Jersey",
        JM: "Jamaica",
        JN: "Jan Mayen",
        JO: "Jordan",
        JQ: "Johnston Atoll",
        JU: "French Southern and Antarctic Lands Juan de Nova Island",
        KE: "Kenya",
        KG: "Kyrgyzstan",
        KN: "Korea, North",
        KQ: "Kingman Reef",
        KR: "Kiribati",
        KS: "Korea, South",
        KT: "Christmas Island",
        KU: "Kuwait",
        KV: "Kosovo",
        KZ: "Kazakhstan",
        LA: "Laos",
        LE: "Lebanon",
        LG: "Latvia",
        LH: "Lithuania",
        LI: "Liberia",
        LO: "Slovakia",
        LQ: "Palmyra Atoll",
        LS: "Liechtenstein",
        LT: "Lesotho",
        LU: "Luxembourg",
        LY: "Libya",
        MA: "Madagascar",
        MB: "Martinique",
        MC: "Macau",
        MD: "Moldova",
        MF: "Mayotte",
        MG: "Mongolia",
        MH: "Montserrat",
        MI: "Malawi",
        MJ: "Montenegro",
        MK: "Macedonia",
        ML: "Mali",
        MN: "Monaco",
        MO: "Morocco",
        MP: "Mauritius",
        MQ: "Midway Islands",
        MR: "Mauritania",
        MT: "Malta",
        MU: "Oman",
        MV: "Maldives",
        MX: "Mexico",
        MY: "Malaysia",
        MZ: "Mozambique",
        NC: "New Caledonia",
        NE: "Niue",
        NF: "Norfolk Island",
        NG: "Niger",
        NH: "Vanuatu",
        NI: "Nigeria",
        NL: "Netherlands",
        NN: "Sint Maarten",
        NO: "Norway",
        NP: "Nepal",
        NR: "Nauru",
        NS: "Suriname",
        NU: "Nicaragua",
        NZ: "New Zealand",
        OD: "South Sudan",
        PA: "Paraguay",
        PC: "Pitcairn Islands",
        PE: "Peru",
        PF: "Paracel Islands",
        PG: "Spratly Islands",
        PJ: "Etorofu, Habomai, Kunashiri, and Shikotan Islands",
        PK: "Pakistan",
        PL: "Poland",
        PM: "Panama",
        PO: "Portugal",
        PP: "Papua New Guinea",
        PS: "Palau",
        PU: "Guinea-Bissau",
        QA: "Qatar",
        RE: "RÃ©union",
        RI: "Serbia",
        RM: "Marshall Islands",
        RN: "Saint Martin",
        RO: "Romania",
        RP: "Philippines",
        RQ: "Puerto Rico",
        RS: "Russia",
        RW: "Rwanda",
        SA: "Saudi Arabia",
        SB: "Saint Pierre and Miquelon",
        SC: "Saint Kitts and Nevis",
        SE: "Seychelles",
        SF: "South Africa",
        SG: "Senegal",
        SH: "Saint Helena, Ascension, and Tristan da Cunha",
        SI: "Slovenia",
        SL: "Sierra Leone",
        SM: "San Marino",
        SN: "Singapore",
        SO: "Somalia",
        SP: "Spain",
        ST: "Saint Lucia",
        SU: "Sudan",
        SV: "Svalbard",
        SW: "Sweden",
        SX: "South Georgia and South Sandwich Islands",
        SY: "Syria",
        SZ: "Switzerland",
        TB: "Saint Barthelemy",
        TD: "Trinidad and Tobago",
        TE: "French Southern and Antarctic Lands Tromelin Island",
        TH: "Thailand",
        TI: "Tajikistan",
        TK: "Turks and Caicos Islands",
        TL: "Tokelau",
        TN: "Tonga",
        TO: "Togo",
        TP: "Sao Tome and Principe",
        TS: "Tunisia",
        TT: "Timor-Leste",
        TU: "Turkey",
        TV: "Tuvalu",
        TW: "Taiwan",
        TX: "Turkmenistan",
        TZ: "Tanzania",
        UC: "CuraÃ§ao",
        UG: "Uganda",
        UK: "United Kingdom",
        UP: "Ukraine",
        US: "United States",
        UV: "Burkina Faso",
        UY: "Uruguay",
        UZ: "Uzbekistan",
        VC: "Saint Vincent and the Grenadines",
        VE: "Venezuela",
        VI: "British Virgin Islands",
        VN: "Vietnam",
        VQ: "United States Virgin Islands",
        VT: "Vatican City",
        WA: "Namibia",
        WE: "West Bank",
        WF: "Wallis and Futuna",
        WI: " Western Sahara",
        WQ: "Wake Island",
        WS: "Samoa",
        WZ: "Swaziland",
        YM: "Yemen",
        ZA: "Zambia",
        ZI: "Zimbabwe"
    };
    return e[a] ? e[a] : a
}

function determineChartContent(a) {
    var e = $(selectedTab).find("#query-count").val();
    return e.indexOf("primarysource.reportercountry") >= 0 ? "primarysource.reportercountry" : e.indexOf("primarysource.qualification") >= 0 ? "primarysource.qualification" : e.indexOf("serious") >= 0 ? "serious" : e.indexOf("patient.patientsex") >= 0 ? "patient.patientsex" : e.indexOf("classification") >= 0 ? "classification" : e.indexOf("voluntary_mandated") >= 0 ? "voluntary_mandated" : e.indexOf("effective_time") >= 0 ? "effective_time" : e.indexOf("date") >= 0 ? "date" : e.indexOf("_country") >= 0 ? "country_code" : "" !== e && a.length >= 1 ? "count" : void 0
}

function updateResultCount(a) {
    $(selectedTab).find("#result-count").text(numberToCommaSeparated(a) + " records match these search parameters")
}

function updateCoverageChart(a, e) {
    a -= e, c3.generate({
        bindto: selectedCoverageChart,
        data: {
            columns: [
                ["Records that don't match this search", a],
                ["Records that match this search", e]
            ],
            type: "donut",
            groups: [
                ["Records that don't match this search", "Records that match this search"]
            ]
        },
        color: {
            pattern: ["#d2d2d2", "#888"]
        },
        size: {
            height: 65,
            width: 65
        },
        margin: 0,
        legend: {
            show: !1
        },
        label: {
            show: !1
        }
    })
}

function drawChartWithData(a) {
    function e(a, e) {
        c3.generate({
            bindto: selectedChart,
            data: {
                columns: [a],
                type: "bar"
            },
            color: {
                pattern: ["#00539b"]
            },
            bar: {
                width: {
                    ratio: .35
                }
            },
            axis: {
                rotated: !0,
                x: {
                    type: "categorized",
                    categories: e
                },
                y: {
                    show: !1,
                    ticks: {
                        culling: {
                            max: 1
                        }
                    }
                }
            },
            labels: !0,
            size: {
                height: c
            },
            legend: {
                show: !1
            }
        })
    }

    function n(a) {
        c3.generate({
            bindto: selectedChart,
            data: {
                columns: a,
                type: "donut"
            },
            color: {
                pattern: ["#8bc3e0", "#74a9d6", "#5e8dcc", "#4a6fc2", "#3751b8", "#8be095", "#74d674"]
            },
            labels: !0,
            size: {
                height: c
            },
            legend: {
                show: !0,
                position: "right"
            }
        })
    }

    function t(a, e) {
        c3.generate({
            bindto: selectedChart,
            data: {
                x: "Date",
                x_format: "%Y%m",
                columns: [e, a]
            },
            point: {
                show: !1
            },
            color: {
                pattern: ["#00539b"]
            },
            axis: {
                x: {
                    type: "timeseries",
                    tick: {
                        format: "%Y-%m",
                        culling: {
                            max: 6
                        }
                    }
                },
                y: {
                    tick: {
                        culling: {
                            max: 4
                        }
                    }
                }
            },
            legend: {
                show: !1
            },
            size: {
                height: c
            }
        })
    }

    function r(a, e, n) {
        $.each(a, function(a, t) {
            var r = [];
            $.each(t, function(a, n) {
                r.push(e(a, n))
            }), "bar" === n ? (o.push(r[0]), s.push(r[1])) : s.push(r)
        })
    }

    function i(a, e, n) {
        var t = d3.nest().key(function(a) {
            return a.time.slice(0, 6)
        }).rollup(function(a) {
            return d3.sum(a, function(a) {
                return a.count
            })
        }).entries(a);
        t.map(function(a) {
            n.push(a.key), e.push(a.values)
        })
    }
    var o = [],
        s = [],
        u = determineChartContent(a),
        c = 300;
    if ("count" === u) {
        s.push("# of matching records"), a = a.slice(0, 10);
        var d = function(a, e) {
            return "term" == a && ("" == e && (e = "null/no value"), e = e.toLowerCase()), e
        };
        r(a, d, "bar"), e(s, o)
    } else if ("date" === u) s.push("Reports"), o.push("Date"), i(a, s, o), t(s, o);
    else if ("effective_time" === u) s.push("Submissions"), o.push("Date"), i(a, s, o), t(s, o);
    else if ("primarysource.qualification" === u) {
        a = a.slice(0, 5);
        var d = function(a, e) {
            return "term" == a && ("1" == e ? e = "Physician" : "2" == e ? e = "Pharmacist" : "3" == e ? e = "Other health professional" : "4" == e ? e = "Lawyer" : "5" == e && (e = "Consumer or non-health professional")), e
        };
        r(a, d, "donut"), n(s)
    } else if ("primarysource.reportercountry" === u) {
        s.push("Reporter country"), a = a.slice(0, 10);
        var d = function(a, e) {
            return "term" == a && (e = stringToTitleCase(e)), e
        };
        r(a, d, "bar"), e(s, o)
    } else if ("serious" === u) {
        a = a.slice(0, 2);
        var d = function(a, e) {
            return "term" == a && ("1" == e ? e = "Death, life threatening condition, hospitalization, disability, congenital anomali, or other serious condition" : "2" == e && (e = "Other")), e
        };
        r(a, d, "donut"), n(s)
    } else if ("patient.patientsex" === u) {
        a = a.slice(0, 3);
        var d = function(a, e) {
            return "term" == a && ("1" == e ? e = "Male" : "2" == e ? e = "Female" : "0" == e && (e = "Other")), e
        };
        r(a, d, "donut"), n(s)
    } else if ("classification" === u) {
        a = a.slice(0, 3);
        var d = function(a, e) {
            return e
        };
        r(a, d, "donut"), n(s)
    } else if ("voluntary_mandated" === u) {
        a = a.slice(0, 2);
        var d = function(a, e) {
            return e
        };
        r(a, d, "donut"), n(s)
    } else if ("country_code" === u) {
        s.push("Reports"), a = a.slice(0, 10);
        var d = function(a, e) {
            return "term" == a && (e = replaceCountryCode(e)), e
        };
        r(a, d, "bar"), e(s, o)
    } else console.log("Not countable")
}

function runQueries(a, e) {
    $.getJSON(e).success(function(a) {
        drawChartWithData(a.results)
    }).fail(function() {
        console.log("fails"), $(selectedTab).find("#query-endpoint").popover({
            trigger: "manual",
            container: "body",
            placement: "top",
            content: "Oh no! The API query failed. It's probably due to a syntax error (double-check the query and spelling), or because the API couldn't be reached."
        }).on("shown.bs.popover", function() {
            setTimeout(function() {
                $(selectedTab).find("#query-endpoint").popover("hide")
            }, 7e3)
        }), $(selectedTab).find("#query-endpoint").popover("show")
    }), $.getJSON(a, function(a) {
        var e = a.meta.results.total;
        updateCoverageChart(maxNumberOfRecords, e), updateResultCount(e)
    })
}

function constructAndExecuteQuery() {
    var a = endpoint,
        e = $(selectedTab).find("#query-search").val(),
        n = $(selectedTab).find("#query-count").val(),
        t = a;
    "" != e && (t += "search=" + e), "" == e && (t = a + "search=" + countTerm + "&limit=1"), "" != e && (a += "search=" + e), "" != n && (a += "&count=" + n), runQueries(t, a), $(selectedTab).find("#query-endpoint").text(a)
}
var selectedTab = $(".tab-content > .tab-pane.active"),
    selectedChart = $(selectedTab).find("#chart")[0],
    selectedCoverageChart = $(selectedTab).find("#chart-coverage")[0],
    maxNumberOfRecords;
$(document).ready(function() {
    constructAndExecuteQuery(), $.getJSON(endpoint + "search=" + countTerm, function(a) {
        maxNumberOfRecords = a.meta.results.total
    }), $(selectedTab).find("#query-button").on("click", function() {
        constructAndExecuteQuery()
    }), $('a[data-toggle="pill"]').on("shown.bs.tab", function(a) {
        selectedTab = $(".tab-content > .tab-pane.active"), selectedChart = $(selectedTab).find("#chart")[0], selectedCoverageChart = $(selectedTab).find("#chart-coverage")[0], $(a.relatedTarget[0]).find("#query-button").off("click"), $(selectedTab).find("#query-button").on("click", function() {
            constructAndExecuteQuery()
        });
        var e = $(selectedTab).find("input[name=api-query-options-search]:radio")[0];
        $(e).trigger("click"), constructAndExecuteQuery(), $("textarea").autosize().show().trigger("autosize.resize")
    })
}), $(".tab-pane").find("input[name=api-query-options-search]:radio").change(function() {
    var a = $(".tab-pane").find("#query-search"),
        e = $(this).val();
    a.val(e), $(selectedTab).find("#query-button").trigger("click"), $("textarea").autosize().trigger("autosize.resize")
}), $(".query-textarea").keypress(function(a) {
    var e = a.keyCode ? a.keyCode : a.which,
        n = $(this).parents(".tab-pane").find("#query-button");
    $(this).parents(".api-query-options").find("input").prop("checked", !1), 32 === e ? a.preventDefault() : 13 === e && (a.preventDefault(), $(n).trigger("click"))
}), Modernizr.svg || ($("#api-demo").hide(), $("#api-demo-no-svg").show());