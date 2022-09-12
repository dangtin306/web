import axios from "axios";

export default {
    getVoucher: async ({ commit, state }, data) => {
        let url = "/api/v2/prize/list";
        let params = data;
        let config = {
            headers: {
                Authorization: "Bearer " + data.token,
            },
            params,
        };
        console.log("params", params);
        commit("PRE_LOADING");
        await axios
            .get(url, config)
            .then((res) => {
                let data = res.data;
                commit("SET_DATA_GET_VOUCHER", data);
            })
            .catch(function (error) {
                commit("SET_ERROR", error.message);
            });
    },
    getVoucherByShop: async ({ commit, state }, data) => {
        let url = "/api/v2/prize/list-by-shop";
        let params = data;
        let config = {
            headers: {
                Authorization: "Bearer " + data.token,
            },
            params,
        };
        console.log("params", params);
        commit("PRE_LOADING");
        await axios
            .get(url, config)
            .then((res) => {
                let data = res.data;
                commit("SET_DATA_GET_VOUCHER_SHOP", data);
            })
            .catch(function (error) {
                commit("SET_ERROR", error.message);
            });
    },
    getVoucherDetail: async ({ commit, state }, data) => {
        let url = "/api/v2/voucher/detail";
        let params = data;
        let config = {
            headers: {
                Authorization: "Bearer " + data.token,
            },
            params,
        };
        state.voucher_detail = null;
        commit("PRE_LOADING");
        await axios
            .get(url, config)
            .then((res) => {
                let data = res.data;
                commit("SET_DATA_VOUCHER_DETAIL", data);
            })
            .catch(function (error) {
                commit("SET_ERROR", error.message);
            });
    },
    userRequestUse: async ({ commit, state }, data) => {
        let url = "/api/v2/gift/user-request-use";
        let params = data;
        let config = {
            headers: {
                Authorization: "Bearer " + data.token,
            },
        };
        commit("PRE_LOADING");
        return await axios
            .post(url, params, config)
            .then((res) => {
                if(res.data.status == 201) {
                    commit("SET_ERROR", res.data.message);
                }
                return res.data;
            })
            .catch(function (error) {
                commit("SET_ERROR", error.message);
            });
    },
    approveUserRequestUse: async ({ commit, state }, data) => {
        let url = "/api/v2/gift/shop-approve-user-request-use";
        let params = data;
        let config = {
            headers: {
                Authorization: "Bearer " + data.token,
            },
        };
        commit("PRE_LOADING");
        return await axios
            .post(url, params, config)
            .then((res) => {
                if(res.data.status == 201) {
                    commit("SET_ERROR", res.data.message);
                }
                return res.data;
            })
            .catch(function (error) {
                commit("SET_ERROR", error.message);
            });
    },
    changeLayout: ({ commit, state }, data) => {
        commit("CHANGE_LAYOUT", data);
    },
};
