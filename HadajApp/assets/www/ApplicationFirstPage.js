/*
 * JS for ApplicationFirstPage generated by Appery.io
 */

Apperyio.getProjectGUID = function() {
    return '32c961fa-1d24-428b-aa1d-5e922f17f152';
};

function navigateTo(outcome, useAjax) {
    Apperyio.navigateTo(outcome, useAjax);
}

function adjustContentHeight() {
    Apperyio.adjustContentHeightWithPadding();
}

function adjustContentHeightWithPadding(_page) {
    Apperyio.adjustContentHeightWithPadding(_page);
}

function setDetailContent(pageUrl) {
    Apperyio.setDetailContent(pageUrl);
}

Apperyio.AppPages = [{
    "name": "MyFollowings",
    "location": "MyFollowings.html"
}, {
    "name": "DirectChat",
    "location": "DirectChat.html"
}, {
    "name": "ApplicationOption",
    "location": "ApplicationOption.html"
}, {
    "name": "CarriageOrderChoices",
    "location": "CarriageOrderChoices.html"
}, {
    "name": "TypeChoice",
    "location": "TypeChoice.html"
}, {
    "name": "MyFollowers",
    "location": "MyFollowers.html"
}, {
    "name": "Settings",
    "location": "Settings.html"
}, {
    "name": "Favorite",
    "location": "Favorite.html"
}, {
    "name": "Account",
    "location": "Account.html"
}, {
    "name": "AddFrinds",
    "location": "AddFrinds.html"
}, {
    "name": "GuidingInformation",
    "location": "GuidingInformation.html"
}, {
    "name": "Home",
    "location": "Home.html"
}, {
    "name": "PhoneConfirm",
    "location": "PhoneConfirm.html"
}, {
    "name": "RecevingSMSCode",
    "location": "RecevingSMSCode.html"
}, {
    "name": "TermsServices",
    "location": "TermsServices.html"
}, {
    "name": "NewFavoriteGroup",
    "location": "NewFavoriteGroup.html"
}, {
    "name": "ChooseUserName",
    "location": "ChooseUserName.html"
}, {
    "name": "Profile",
    "location": "Profile.html"
}, {
    "name": "Welcome",
    "location": "Welcome.html"
}, {
    "name": "ApplicationFirstPage",
    "location": "ApplicationFirstPage.html"
}, {
    "name": "UploadAd",
    "location": "UploadAd.html"
}, {
    "name": "ad_details",
    "location": "ad_details.html"
}, {
    "name": "CarriageOrders",
    "location": "CarriageOrders.html"
}, {
    "name": "ApproveActivatePhone",
    "location": "ApproveActivatePhone.html"
}, {
    "name": "SingleFavoriteGroup",
    "location": "SingleFavoriteGroup.html"
}, {
    "name": "MyOrders",
    "location": "MyOrders.html"
}, {
    "name": "DriverServiceOffer",
    "location": "DriverServiceOffer.html"
}];

function ApplicationFirstPage_js() {

    /* Object & array with components "name-to-id" mapping */
    var n2id_buf = {
        'mobileworkarea_10': 'ApplicationFirstPage_mobileworkarea_10',
        'mobilelabel_welcome': 'ApplicationFirstPage_mobilelabel_welcome',
        'mobilebutton_terms_services': 'ApplicationFirstPage_mobilebutton_terms_services',
        'spacer_13': 'ApplicationFirstPage_spacer_13',
        'mobilebutton_agree_activate': 'ApplicationFirstPage_mobilebutton_agree_activate',
        'mobilenavbar_6': 'ApplicationFirstPage_mobilenavbar_6',
        'favorite_item': 'ApplicationFirstPage_favorite_item',
        'home_item': 'ApplicationFirstPage_home_item',
        'upload_item': 'ApplicationFirstPage_upload_item'
    };

    if ("n2id" in window && window.n2id !== undefined) {
        $.extend(n2id, n2id_buf);
    } else {
        window.n2id = n2id_buf;
    }

    /*
     * Nonvisual components
     */

    Apperyio.mappings = Apperyio.mappings || {};

    Apperyio.mappings["ApplicationFirstPage_restservice_welcome_content_onsuccess_mapping_0"] = {
        "homeScreen": "ApplicationFirstPage",
        "directions": [

        {
            "from_name": "restservice_welcome_content",
            "from_type": "SERVICE_RESPONSE",

            "to_name": "ApplicationFirstPage",
            "to_type": "UI",

            "mappings": [

            {

                "source": "$['body'][0]['content']",
                "target": "$['mobilelabel_welcome:text']"

            }

            ]
        }

        ]
    };

    Apperyio.mappings["ApplicationFirstPage_restservice_welcome_content_onbeforesend_mapping_0"] = {
        "homeScreen": "ApplicationFirstPage",
        "directions": []
    };

    Apperyio.datasources = Apperyio.datasources || {};

    window.restservice_welcome_content = Apperyio.datasources.restservice_welcome_content = new Apperyio.DataSource(Welcome_content_service, {
        "onBeforeSend": function(jqXHR) {
            Apperyio.processMappingAction(Apperyio.mappings["ApplicationFirstPage_restservice_welcome_content_onbeforesend_mapping_0"]);
        },
        "onComplete": function(jqXHR, textStatus) {

        },
        "onSuccess": function(data) {
            Apperyio.processMappingAction(Apperyio.mappings["ApplicationFirstPage_restservice_welcome_content_onsuccess_mapping_0"]);
        },
        "onError": function(jqXHR, textStatus, errorThrown) {}
    });

    Apperyio.CurrentScreen = 'ApplicationFirstPage';
    _.chain(Apperyio.mappings).filter(function(m) {
        return m.homeScreen === Apperyio.CurrentScreen;
    }).each(Apperyio.UIHandler.hideTemplateComponents);

    /*
     * Events and handlers
     */

    // On Load
    var ApplicationFirstPage_onLoad = function() {
            ApplicationFirstPage_elementsExtraJS();

            ApplicationFirstPage_deviceEvents();
            ApplicationFirstPage_windowEvents();
            ApplicationFirstPage_elementsEvents();
        };

    // screen window events


    function ApplicationFirstPage_windowEvents() {

        $('#ApplicationFirstPage').bind('pageshow orientationchange', function() {
            var _page = this;
            adjustContentHeightWithPadding(_page);
        });
        $('#ApplicationFirstPage').on({
            pageshow: function(event) {
                try {
                    restservice_welcome_content.execute({});
                } catch (e) {
                    console.error(e);
                    hideSpinner();
                };
            },
        });

    };

    // device events


    function ApplicationFirstPage_deviceEvents() {
        document.addEventListener("deviceready", function() {

        });
    };

    // screen elements extra js


    function ApplicationFirstPage_elementsExtraJS() {
        // screen (ApplicationFirstPage) extra code

    };

    // screen elements handler


    function ApplicationFirstPage_elementsEvents() {
        $(document).on("click", "a :input,a a,a fieldset label", function(event) {
            event.stopPropagation();
        });

        $(document).off("click", '#ApplicationFirstPage_mobilecontainer1 [name="mobilebutton_terms_services"]').on({
            click: function(event) {
                if (!$(this).attr('disabled')) {
                    Apperyio.navigateTo('TermsServices', {
                        reverse: false
                    });

                }
            },
        }, '#ApplicationFirstPage_mobilecontainer1 [name="mobilebutton_terms_services"]');

        $(document).off("click", '#ApplicationFirstPage_mobilecontainer1 [name="mobilebutton_agree_activate"]').on({
            click: function(event) {
                if (!$(this).attr('disabled')) {
                    Apperyio.navigateTo('ApproveActivatePhone', {
                        reverse: false
                    });

                }
            },
        }, '#ApplicationFirstPage_mobilecontainer1 [name="mobilebutton_agree_activate"]');

        $(document).off("click", '#ApplicationFirstPage_mobilefooter1 [name="favorite_item"]').on({
            click: function(event) {
                if (!$(this).attr('disabled')) {
                    user_info_data = Apperyio.storage.user_info.get();
                    if (typeof(user_info_data) === "undefined") {
                        Toast("You are not a registered user.Please make an account first");
                        return;
                    } else {
                        phone_no = user_info_data.phone_no;
                        if (phone_no.length === 0) {
                            Toast("You are not a registered user.Please make an account first");
                            return;
                        }
                    };
                    Apperyio.navigateTo('Favorite', {
                        reverse: false
                    });

                }
            },
        }, '#ApplicationFirstPage_mobilefooter1 [name="favorite_item"]');
        $(document).off("click", '#ApplicationFirstPage_mobilefooter1 [name="home_item"]').on({
            click: function(event) {
                if (!$(this).attr('disabled')) {
                    user_info_data = Apperyio.storage.user_info.get();
                    if (typeof(user_info_data) === "undefined") {
                        Toast("You are not a registered user.Please make an account first");
                        return;
                    } else {
                        phone_no = user_info_data.phone_no;
                        if (phone_no.length === 0) {
                            Toast("You are not a registered user.Please make an account first");
                            return;
                        }
                    };
                    Apperyio.navigateTo('Home', {
                        reverse: false
                    });

                }
            },
        }, '#ApplicationFirstPage_mobilefooter1 [name="home_item"]');
        $(document).off("click", '#ApplicationFirstPage_mobilefooter1 [name="upload_item"]').on({
            click: function(event) {
                if (!$(this).attr('disabled')) {
                    user_info_data = Apperyio.storage.user_info.get();
                    if (typeof(user_info_data) === "undefined") {
                        Toast("You are not a registered user.Please make an account first");
                        return;
                    } else {
                        phone_no = user_info_data.phone_no;
                        if (phone_no.length === 0) {
                            Toast("You are not a registered user.Please make an account first");
                            return;
                        }
                    };
                    Apperyio.navigateTo('TypeChoice', {
                        reverse: false
                    });
                    localStorage.setItem('page_from', 'UploadAd');

                }
            },
        }, '#ApplicationFirstPage_mobilefooter1 [name="upload_item"]');

    };

    $(document).off("pagebeforeshow", "#ApplicationFirstPage").on("pagebeforeshow", "#ApplicationFirstPage", function(event, ui) {
        Apperyio.CurrentScreen = "ApplicationFirstPage";
        _.chain(Apperyio.mappings).filter(function(m) {
            return m.homeScreen === Apperyio.CurrentScreen;
        }).each(Apperyio.UIHandler.hideTemplateComponents);
    });

    ApplicationFirstPage_onLoad();
};

$(document).off("pagecreate", "#ApplicationFirstPage").on("pagecreate", "#ApplicationFirstPage", function(event, ui) {
    Apperyio.processSelectMenu($(this));
    ApplicationFirstPage_js();
});