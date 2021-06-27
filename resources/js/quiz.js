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
                $('html, body').animate({ scrollTop: 0 }, 'fast');
            });
    });
    function buildResults(correct, missed, answers) {
        let ts = '';
        if (correct < 5) {
            ts = 'color: #ff0000';
        }
        else {
            ts = 'color: #00ff00';
        }
        let results = '<h2 style="' + ts + '">You have ' + correct + ' answers correct.</h2>';
        if (correct < 10) {
            results += 'You missed the following:<br>';
        }
        $(missed).each(function(miss,c) {
            results += 'Q'+ c +'. '+ answers[miss] + '.<br>';
        });
        results += '<hr>';
        return results;
    }
});
