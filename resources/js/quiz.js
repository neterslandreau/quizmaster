$(function() {
    $('#quizsubmit').on('click', function(e) {
        e.preventDefault();
        console.log('form',$('#quizform').serialize());
        let data = $('#quizform').serialize();
        let url = '/quizzes/1/tally ';
        return axios.post(url)
            .then(response => {
                console.log(response.data);
                // console.log('edit response', response.data.shift);
            });

    });
});
