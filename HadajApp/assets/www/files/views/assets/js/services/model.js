/**
 * Data models
 */
Apperyio.Entity = new Apperyio.EntityFactory({
    "SearchPara": {
        "type": "object",
        "properties": {
            "search_key_json": {
                "type": "string"
            },
            "search_type": {
                "type": "string"
            }
        }
    },
    "String": {
        "type": "string"
    },
    "Boolean": {
        "type": "boolean"
    },
    "InfiniteList": {
        "type": "object",
        "properties": {
            "skip": {
                "type": "string"
            },
            "noMoreItems": {
                "type": "string"
            },
            "limit": {
                "type": "string"
            }
        }
    },
    "user_register": {
        "type": "object",
        "properties": {
            "users_id": {
                "type": "string"
            },
            "email": {
                "type": "string"
            },
            "delivery_driver_job": {
                "type": "string"
            },
            "phone_no": {
                "type": "string"
            },
            "activation_code": {
                "type": "string"
            },
            "nick_name": {
                "type": "string"
            },
            "status": {
                "type": "string"
            },
            "password": {
                "type": "string"
            },
            "last_name": {
                "type": "string"
            },
            "first_name": {
                "type": "string"
            },
            "verified": {
                "type": "string"
            },
            "username": {
                "type": "string"
            }
        }
    },
    "TypeChoice": {
        "type": "object",
        "properties": {
            "type_name": {
                "type": "string"
            },
            "type_id": {
                "type": "string"
            }
        }
    },
    "Number": {
        "type": "number"
    }
});
Apperyio.getModel = Apperyio.Entity.get.bind(Apperyio.Entity);

/**
 * Data storage
 */
Apperyio.storage = {

    "ImageData": new $a.LocalStorage("ImageData", "String"),

    "ad_id": new $a.LocalStorage("ad_id", "String"),

    "image": new $a.LocalStorage("image", "String"),

    "video": new $a.LocalStorage("video", "String"),

    "numrows": new $a.LocalStorage("numrows", "Number"),

    "dogsInfinite": new $a.LocalStorage("dogsInfinite", "InfiniteList"),

    "usersInfinite": new $a.LocalStorage("usersInfinite", "InfiniteList"),

    "searchPara": new $a.LocalStorage("searchPara", "SearchPara"),

    "adimage_id": new $a.LocalStorage("adimage_id", "String"),

    "user_info": new $a.LocalStorage("user_info", "user_register"),

    "type": new $a.LocalStorage("type", "String"),

    "favorite_group": new $a.LocalStorage("favorite_group", "String"),

    "typeChoice": new $a.LocalStorage("typeChoice", "TypeChoice"),

    "id": new $a.LocalStorage("id", "String")
};