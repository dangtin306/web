export default {
    updateReviewState: ({ commit, state }, data) => {
        commit("UPDATE_REVIEW_STATE", data);
    },
    loadCommentStats: ({ commit, state }, data) => {
        commit("LOAD_COMMENT_STATS", data);
    },
    loadCommentList: ({ commit, state }, data) => {
        commit("LOAD_COMMENT_LIST", data);
    },
};
