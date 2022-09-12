import axios from "axios";
export default {
    UPDATE_REVIEW_STATE: (state, data) => {
        if (data) {
            if (data.hasOwnProperty("rating_point")) {
                state.rating_point = data.rating_point;
            }
            if (data.hasOwnProperty("total_comment")) {
                state.total_comment = data.total_comment;
            }
            if (data.hasOwnProperty("product_id")) {
                state.product_id = data.product_id;
            }
            if (data.hasOwnProperty("voucher_id")) {
                state.voucher_id = data.voucher_id;
            }
            if (data.hasOwnProperty("page")) {
                state.page = data.page;
            }
            if (data.hasOwnProperty("sort_date")) {
                state.sort_date = data.sort_date;
            }
            if (data.hasOwnProperty("sort_star")) {
                state.sort_star = data.sort_star;
            }
            if (data.hasOwnProperty("can_comment")) {
                state.can_comment = data.can_comment;
            }
            if (data.hasOwnProperty("loading")) {
                state.loading = data.loading;
            }
            if (data.hasOwnProperty("is_checked_pem")) {
                state.is_checked_pem = data.is_checked_pem;
            }
            // console.log("updateReviewState", state);
        }
    },
    LOAD_COMMENT_STATS: (state, data) => {
        state.load_comment_stats = data;
        console.log('state.load_comment_stats ===> ',state.load_comment_stats);
    },
    LOAD_COMMENT_LIST: (state, data) => {
        state.load_comment = data;
    },
};
