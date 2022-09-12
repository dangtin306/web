export default {
    SET_ERROR: (state, data) => {
        state.error = data;
        state.loading = false;
        state.vouchers_loaded = false;
        state.vouchers_shop_loaded = false;
    },
    SET_DATA_GET_VOUCHER: (state, data) => {
        if (data.result.length > 0) {
            state.vouchers = data.result;
            state.total = data.total;
            state.limit = data.limit;
            state.currentPage = data.page;
            state.totalPages = Math.round(data.total / data.limit);
        }
        state.loading = false;
        state.vouchers_loaded = true;
    },
    SET_DATA_GET_VOUCHER_SHOP: (state, data) => {
        if (data.result.length > 0) {
            state.vouchers_shop = data.result;
            state.total = data.total;
            state.limit = data.limit;
            state.currentPage = data.page;
            state.totalPages = Math.round(data.total / data.limit);
        }
        state.loading = false;
        state.vouchers_shop_loaded = true;
    },
    SET_DATA_VOUCHER_DETAIL: (state, data) => {
        if (data.result) {
            state.voucher_detail = data.result;
        }
        state.loading = false;
    },
    PRE_LOADING: (state) => {
        state.loading = true;
        state.vouchers_loaded = false;
        state.vouchers_shop_loaded = false;
    },
    CHANGE_LAYOUT: (state, data) => {
        // console.log(state.layouts, data, data in state.layouts);
        if (data in state.layouts) {
            state.default_layout = data;
        } else {
            console.log(`layout ${data} not found`);
        }
    },
};
