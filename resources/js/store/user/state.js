import $ from "jquery";

export default {
    vouchers: [],
    vouchers_shop: [],
    loading: true,
    error: "",
    success: "",
    totalPages: 0,
    perPage: 5,
    currentPage: 1,
    limit: 5,
    total: 0,
    vouchers_loaded: false,
    vouchers_shop_loaded: false,
    voucher_detail: null,
    default_layout: "voucher",
    stores: [],
    layouts: {
        voucher: {
            component: "voucher",
            name: "Voucher của tôi",
            icon: "fa fa-gift",
            path: "/user/profile/voucher",
        },
        "user-info": {
            component: "user-info",
            name: "Thông tin cá nhân",
            icon: "fa fa-info-circle",
            path: "/user/profile/info",
        },
        "change-password": {
            component: "change-password",
            name: "Đổi mật khẩu",
            icon: "fa fa-unlock",
            path: "/user/profile/change-password",
        },
    },
};
