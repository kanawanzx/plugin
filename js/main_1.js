jQuery(document).ready(function ($) {
    var myDate = Date.parse('March 21, 2016');
                $('#countdown15').muria_countdown_clock({
                    theme: "flat-colors",
                    end: $.now() + 10000
                });
                $('#countdown16').muria_countdown_clock({
                    theme: "flat-colors-wide",
                    end: $.now() + 10000
                });
                $('#countdown17').muria_countdown_clock({
                    theme: "flat-colors-very-wide",
                    end: $.now() + 10000
                });
                $('#countdown18').muria_countdown_clock({
                    theme: "flat-colors-black",
                    end: $.now() + 10000
                });
                $('#countdown1').muria_countdown_clock({
                    theme: "white",
                    end: $.now() + 645600
                });
                $('#countdown5').muria_countdown_clock({
                    theme: "white",
                    end: $.now() + 10000
                });
                $('#countdown6').muria_countdown_clock({
                    theme: "white-wide",
                    end: $.now() + 10000
                });
                $('#countdown7').muria_countdown_clock({
                    theme: "white-very-wide",
                    end: $.now() + 10000
                });
                $('#countdown8').muria_countdown_clock({
                    theme: "white-black",
                    end: $.now() + 10000
                });
                $('#countdown11').muria_countdown_clock({
                    theme: "black",
                    style: {
                        secondsElement: {
                            gauge: {
                                fgColor: "#F00"
                            }
                        }
                    },
                    end: $.now() + 10000
                });
                $('#countdown12').muria_countdown_clock({
                    theme: "black-wide",
                    labels: false,
                    end: $.now() + 10000
                });
                $('#countdown13').muria_countdown_clock({
                    theme: "black-very-wide",
                    labelsOptions: {
                        lang: {
                            days: 'D',
                            hours: 'H',
                            minutes: 'M',
                            seconds: 'S'
                        },
                        style: 'font-size:0.5em; text-transform:uppercase;'
                    },
                    end: $.now() + 10000
                });
                $('#countdown14').muria_countdown_clock({
                    theme: "black-black",
                    labelsOptions: {
                        style: 'font-size:0.5em; text-transform:uppercase;'
                    },
                    end: $.now() + 10000
                });
                $('#countdown4').muria_countdown_clock({
                    end: $.now() + 10000,
                    labels: true,
                    style: {
                        element: "",
                        textResponsive: .5,
                        days: {
                            gauge: {
                                thickness: 1,
                                bgColor: "rgba(255,255,255,0.05)",
                                fgColor: "#1abc9c"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#fff;'
                        },
                        hours: {
                            gauge: {
                                thickness: .03,
                                bgColor: "rgba(255,255,255,0.05)",
                                fgColor: "#2980b9"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#fff;'
                        },
                        minutes: {
                            gauge: {
                                thickness: .03,
                                bgColor: "rgba(255,255,255,0.05)",
                                fgColor: "#8e44ad"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#fff;'
                        },
                        seconds: {
                            gauge: {
                                thickness: 1,
                                bgColor: "rgba(255,255,255,0.05)",
                                fgColor: "#fff"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#fff;'
                        }

                    },
                    onEndCallback: function () {
                        console.log("Time out!");
                    }
                });
                $('#countdown2').muria_countdown_clock({
                    end: '1388468325',
                    now: '1378441323',
                    labels: true,
                    style: {
                        element: "",
                        textResponsive: .5,
                        days: {
                            gauge: {
                                thickness: .01,
                                bgColor: "rgba(0,0,0,0.05)",
                                fgColor: "#1abc9c"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#34495e;'
                        },
                        hours: {
                            gauge: {
                                thickness: .01,
                                bgColor: "rgba(0,0,0,0.05)",
                                fgColor: "#2980b9"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#34495e;'
                        },
                        minutes: {
                            gauge: {
                                thickness: .01,
                                bgColor: "rgba(0,0,0,0.05)",
                                fgColor: "#8e44ad"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#34495e;'
                        },
                        seconds: {
                            gauge: {
                                thickness: .01,
                                bgColor: "rgba(0,0,0,0.05)",
                                fgColor: "#f39c12"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#34495e;'
                        }

                    },
                    onEndCallback: function () {
                        console.log("Time out!");
                    }
                });
                $('#countdown9').muria_countdown_clock({
                    end: '1388468325',
                    now: '1380501323',
                    labels: true,
                    style: {
                        element: "",
                        textResponsive: .5,
                        days: {
                            gauge: {
                                thickness: .05,
                                bgColor: "rgba(0,0,0,0)",
                                fgColor: "#1abc9c",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#34495e;'
                        },
                        hours: {
                            gauge: {
                                thickness: .05,
                                bgColor: "rgba(0,0,0,0)",
                                fgColor: "#2980b9",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#34495e;'
                        },
                        minutes: {
                            gauge: {
                                thickness: .05,
                                bgColor: "rgba(0,0,0,0)",
                                fgColor: "#8e44ad",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#34495e;'
                        },
                        seconds: {
                            gauge: {
                                thickness: .05,
                                bgColor: "rgba(0,0,0,0)",
                                fgColor: "#f39c12",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:#34495e;'
                        }

                    },
                    onEndCallback: function () {
                        console.log("Time out!");
                    }
                });
                $('#countdown10').muria_countdown_clock({
                    end: '1397468325',
                    now: '1388471324',
                    labels: true,
                    labelsOptions: {
                        lang: {
                            days: 'D',
                            hours: 'H',
                            minutes: 'M',
                            seconds: 'S'
                        },
                        style: 'font-size:0.5em; text-transform:uppercase;'
                    },
                    style: {
                        element: "",
                        textResponsive: .5,
                        days: {
                            gauge: {
                                thickness: .02,
                                bgColor: "rgba(255,255,255,0.1)",
                                fgColor: "rgba(255,255,255,1)",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
                        },
                        hours: {
                            gauge: {
                                thickness: .02,
                                bgColor: "rgba(255,255,255,0.1)",
                                fgColor: "rgba(255,255,255,1)",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
                        },
                        minutes: {
                            gauge: {
                                thickness: .02,
                                bgColor: "rgba(255,255,255,0.1)",
                                fgColor: "rgba(255,255,255,1)",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
                        },
                        seconds: {
                            gauge: {
                                thickness: .02,
                                bgColor: "rgba(255,255,255,0.1)",
                                fgColor: "rgba(255,255,255,1)",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
                        },
                    },
                    onEndCallback: function () {
                        console.log("Time out!");
                    }
                });
                $('#countdown3').muria_countdown_clock({
                    end: '1390868325',
                    now: '1388461323',
                    labels: true,
                    labelsOptions: {
                        lang: {
                            days: 'Zile',
                            hours: 'Ore',
                            minutes: 'Minute',
                            seconds: 'Secunde'
                        },
                        style: 'font-size:0.5em; text-transform:uppercase;'
                    },
                    style: {
                        element: "",
                        textResponsive: .5,
                        days: {
                            gauge: {
                                thickness: .2,
                                bgColor: "rgba(255,255,255,0.2)",
                                fgColor: "rgb(241, 196, 15)"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
                        },
                        hours: {
                            gauge: {
                                thickness: .2,
                                bgColor: "rgba(255,255,255,0.2)",
                                fgColor: "rgb(241, 196, 15)"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
                        },
                        minutes: {
                            gauge: {
                                thickness: .2,
                                bgColor: "rgba(255,255,255,0.2)",
                                fgColor: "rgb(241, 196, 15)"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
                        },
                        seconds: {
                            gauge: {
                                thickness: .2,
                                bgColor: "rgba(255,255,255,0.2)",
                                fgColor: "rgb(241, 196, 15)"
                            },
                            textCSS: 'font-family:\'Open Sans\'; font-size:25px; font-weight:300; color:rgba(255,255,255,0.7);'
                        }

                    },
                    onEndCallback: function () {
                        console.log("Time out!");
                    }
                });
            });