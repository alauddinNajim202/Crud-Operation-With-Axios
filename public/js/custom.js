
// insert data
function myData(){
    // get data by document.getElementById()
    var myName=  document.getElementById('myName').value;
    var myEmail = document.getElementById('myEmail').value;
    var myClass= document.getElementById('myClass').value;


    // data post by axios library
    var url = '/insertdata';
    var data = {name:myName, email:myEmail, class:myClass};

    axios.post(url, data)
      .then(function (response) {
        alert(response.data);
      })
      .catch(function (error) {
        alert('Error');
      });


}

//__delete data__

function deleteData(){
    var myId=  document.getElementById('myId').value;

    var url = '/deletedata';
    var data = {id:myId};

    axios.post(url, data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert('Error');
    });


}

// update data

function updateData()
{
    var myId = document.getElementById('myId').value;
    var myName = document.getElementById('myName').value;
    var myEmail = document.getElementById('myEmail').value;
    var myClass = document.getElementById('myClass').value;


    var url = '/updateData';
    var data = {id:myId, name:myName, email:myEmail, class:myClass};



    axios.post(url, data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert('Error');
    });
}
