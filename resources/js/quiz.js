$(function() {
    $('#quizsubmit').on('click', function(e) {
        e.preventDefault();
        let data = $('#quizform').serialize();
        let url = '/quizzes/1/tally';
        return axios.post(url, data)
            .then(response => {
                let correct = response.data.correct;
                let missed = response.data.missed;
                let answers = response.data.answers;

                let results = buildResults(correct, missed, answers);

                $('#quizresults').html(results);
                $('#quizform').trigger('reset');
            });
    });
    function buildResults(correct, missed, answers) {
        let results = '<h2>You have ' + correct + ' answers correct.</h2>You missed the following:<br>';
        $(missed).each(function(miss) {
            let q = miss + 1;
            results += 'Q'+ q +'. '+ answers[miss] + '.<br>';
        });
        results += '<hr>';
        return results;
    }
});
