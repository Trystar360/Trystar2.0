
get();
var s;

function get(){
    db.ref('submitions').orderByValue().on("value", function (snapshot){
        snapshot.forEach(function(childSnapshot) {
            
            var key = childSnapshot.key;

            var childData = childSnapshot.val();
           console.log(childData)
           s = childData;

           var User = s.User;
           var Id = key;
           var Email;
           var Name = s.GameName;
           var Link;

            if(s.Email == '')
            Email = " Email Not Given";
            else Email = s.Email;

            if(s.GameLink == '')
            Link = "#"
            else if(s.GameLink.indexOf("http://") < 0)
            Link = "http://"+ s.gameLink
            else Link = s.GameLink

            console.log(Link)
           addSubmition(User,Id,Email,Name,Link);
        });
    });
}

function addSubmition(user, uid, email, name, link){
    $('#subs').append('<div class="col s6 m4">\
            <div class="card" id="'+uid+'">\
              <div class="card-content">\
                <span class="card-title">'+user+'</span>\
                 <a name="'+uid+'" onClick="remove(this.name)" class="btn-floating halfway-fab waves-effect waves-light red removeBtn">\
                    <i class="material-icons">remove</i>\
                </a>\
                <p class=" grey-text text-darken-1 ">'+uid+'</p>\
                <p>'+email+'</p>\
              </div>\
              <div class="card-action">\
                  <h6><a href="'+link+'">'+name+'</a></h6>\
              </div>\
            </div>\
          </div>');
    console.log("Done");
}
function remove(id){
    db.ref('submitions/'+ id).remove();
    $('#'+id).remove();
    console.log("Removed: " + id)
}