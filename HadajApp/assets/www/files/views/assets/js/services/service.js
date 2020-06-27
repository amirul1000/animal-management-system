/*
 * Services
 */

var Register_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/f87acaba-93d6-47a0-ae8b-ae2a7d03d4af/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetProfileImage_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/3e157496-c625-41ed-a2be-168bedd22be0/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': false,

    'defaultRequest': {
        "headers": {
            "Content-Type": "text/plain",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetMyPostedAd_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/5efeb0ff-9a27-4a9f-ba9f-8500e5e5b5a5/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {
            "users_id": "22"
        },
        "body": null
    }
});

var Age_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/0f61a062-0f62-440c-bbc4-395057688623/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var Save_Favorite_Group_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/0499bf29-74e7-44f2-9059-73a3ff8fe7f3/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': false,

    'defaultRequest': {
        "headers": {
            "Content-Type": "text/plain",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetUsers_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/5934d1cb-5bf8-46f2-ae50-1716bb43e566/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var Type_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/c514fb91-ccde-44bf-8eb7-02d0f4d6a89f/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var Ad_image_save_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/c45fc409-1309-46ca-b1e1-7eaceaee0827/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': 'application/x-www-form-urlencoded',

    'defaultRequest': {
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var Gender_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/e3885521-4c8f-4a21-b10c-9b58e453076f/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': false,

    'defaultRequest': {
        "headers": {
            "Content-Type": "text/plain",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {
            "breed_id": "6"
        },
        "body": null
    }
});

var Ad_video_save_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/cceedeaf-f6fc-4367-99f5-3853b7c18442/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': 'application/x-www-form-urlencoded',

    'defaultRequest': {
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetPostedAd_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/4a9f8944-a49c-486b-b5c5-95a2779e197b/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetGuideInfo_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/9e007ef8-b5e5-4f58-948c-7befefd91230/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var SaveChoice_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/0b8e7de2-82b6-41e5-96f2-2097808a51bb/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': 'application/x-www-form-urlencoded',

    'defaultRequest': {
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var City_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/ca78d3c2-6dc6-49ac-aee1-fd31b4168e39/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {
            "contry_id": "4"
        },
        "body": null
    }
});

var Profile_image_save_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/0294b304-bd85-413b-b5ac-a951d7051a97/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': false,

    'defaultRequest': {
        "headers": {
            "Content-Type": "text/plain",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetImage_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/de56f3a0-990d-42ac-8fbf-afbc7e649628/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {
            "adimage_id": "12"
        },
        "body": null
    }
});

var Contry_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/1d81b65d-aff5-491f-8f90-57763546cd88/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var AdDelete_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/b8fd8c46-1ef7-43ca-859a-7d6630f9def9/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': 'application/x-www-form-urlencoded',

    'defaultRequest': {
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var AdSave_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/1e0f45b2-be06-42f6-8c5e-d494bef3805f/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': 'application/x-www-form-urlencoded',

    'defaultRequest': {
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetChoice_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/25e61bed-6ae2-46b9-bf97-52a7543e4fe4/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var Get_Favorite_Group_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/7d8ba5ab-867b-4734-a8eb-c4b7f9923482/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetFavoriteNotiPostedAd_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/8ca30186-2f66-41d5-8453-5b23541b6cd2/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {
            "users_id": "22"
        },
        "body": null
    }
});

var ChangeAdSoldStatus_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/19e791dd-2c78-41a4-8141-723c643b2188/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': 'application/x-www-form-urlencoded',

    'defaultRequest': {
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetChoicesPostedAd_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/7de08437-c4ff-4b5c-86c8-e3648c6bce88/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var Breed_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/029fc6e6-8677-43ef-889e-704c803f8926/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {
            "type_id": "3"
        },
        "body": null
    }
});

var Login_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/0bd0c1dd-0b2c-4bc9-8317-037f958ce814/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var Welcome_content_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/62661b36-4b77-4d92-93a7-fd8851adddf6/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetFavoritePostedAd_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/807c61b0-a8f1-49f6-b454-7bae2879fd13/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var MyChoiceDelete_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/18f9256d-d0d7-4d11-b0d2-904ba84ade9a/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': 'application/x-www-form-urlencoded',

    'defaultRequest': {
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var GetAdDetails_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/729c00f7-4118-4a5c-bf34-3d0e57bc116a/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var Terms_Services_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/5c673dd0-4021-4045-8631-08e8cac3fd06/exec',
    'dataType': 'json',
    'type': 'get',

    'defaultRequest': {
        "headers": {
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});

var FavoriteDelete_service = new Apperyio.RestService({
    'url': 'https://api.appery.io/rest/1/code/41042383-08fa-40be-a80d-f7f14534e16c/exec',
    'dataType': 'json',
    'type': 'post',
    'contentType': 'application/x-www-form-urlencoded',

    'defaultRequest': {
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-Appery-Api-Express-Api-Key": ""
        },
        "parameters": {},
        "body": null
    }
});