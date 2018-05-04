

addSubmition("a","b","c","d","e");

function addSubmition(user, uid, email, name, link){
    $('#subs').append('<div class="col s6 m4">\
            <div class="card">\
              <div class="card-content">\
                <span class="card-title">'+user+'</span>\
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