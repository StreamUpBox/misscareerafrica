//current_session
loadCurrentSession();
loadAllSession();
loadSelectedCandidates();
// $('.can-voting').hide(); 
$('.apply').hide();
function loadCurrentSession(){
    $('.apply').hide();
  
    $('.loading-overlay').show();
    var htmls= $('#current_session');
    var row;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "/current_session",
        method: "GET",
        dataType: "json",
        success: function (response) {
            $('.loading-overlay').hide();
            if(response.success){

                const data=response.data;
                if(data.is_current_applying){
                    var candidate=data.is_voting_open?' <a href="https://www.theeventx.com/view-event/44" class="btn btn-info"> Get Ticket </a><a href="/selected-candidates" style="color:white!important" class="btn btn-success mr-1 text-white can-voting">VOTE PRESELECTED CANDIDATES</a>':'';
                    var apply=!data.is_voting_open?'<a href="/candidate-application" class="btn btn-primary mr-5">APPLY NOW!</a>':'';
                    row=` <div class="card">
                    <img class="card-img"  style="min-height:350px;max-height:700px" src="/images/${data.image}" alt="${data.title}">
                    <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                      <h3 class="wpb_heading wpb_singleimage_heading1 card-title text-center">${data.title} - ${data.country}</h3>

                      <span class="card-subtitle mb-2" style="color:#fff!important;font-size:40px"><b class="text-white" style="color:#fff!important"></b></span>

                    <a class="title_link" href="/candidate-application">
                        <h2 class="wpb_heading wpb_singleimage_heading2 text-center">

                            <hr />
                            <div class="float-left"><h4 href="#" class="ml-5 mt-4 card-link text-info">${data.date}</h4></div>
                            <div class="float-right">${candidate} ${apply}</div>

                        </h2>
                    </a>

                    </div>
                </div>
                    `;
                   
                    $('.apply').show(); 

                }else{
                    $('.apply').hide();
                }

                htmls.html(row);

            }

        },error:function(err){
           // console.log(err);
        }
    }
    );
}
function readMore(name,src,bio){
    $('.names').html(name?name:'');
    $('.bio').html(bio?bio:'');
    $(".profile").attr("src", src);
}

function loadSelectedCandidates(){
    $('.loading-overlay').show();
    var htmlss= $('#selected_candidates');
    var rows='';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "/list-selected-candidates",
        method: "GET",
        dataType: "json",
        success: function (response) {
            $('.loading-overlay').hide();
          //  console.log(response);
            if(response.success && response.data.length > 0){
            const datas=response.data;
            datas.forEach(element => {
                if(element){
                    rows+=`
                    <div class="col-md-4">
                            <div class="card border-success mb-3" style="max-width: 100%">
                            <div class="card-header bg-transparent border-success"><b>${element.fname} ${element.lname}</b></div>
                            <a href="candidate-page/${element.id}">
                                    <div class="img-fluid" style=" background-image: url('${element.profile}');
                                    background-repeat: no-repeat;width:100%;min-height:300px;
                                    background-size: cover; background-size: center center"></div>
                                    <div class="card-body text-success">
                                    <h5 class="card-title"><b>${element.city} - ${element.country}</b></h5>
                                        <b class="card-text">
                                        <hr />
                                        ${element.bio?element.bio.length > 115?element.bio.substring(0,95)+' <a href="candidate-page/'+element.id+'">read more ....</a>':element.bio:''}
                                        </b>
                                    </div>
                            </a>
                            <div class="card-footer bg-transparent border-success">
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" onclick="votes(${element.id},${element.votes})">
                                    Vote Now! &nbsp;&nbsp;${element.votes}
                                </button>
                                </div>
                                <div class="col-12">
                                <a href="https://www.theeventx.com/view-event/44" class="btn btn-success btn-block btn-sm">
                                Get Ticket
                                </a>
                                </div>

                            </div>
                        </div>
                  </div>

                    `;

                }

            });

        htmlss.html(rows);


        }

        },error:function(err){
           // console.log(err);
        }
    }
    );
}


function votes(id,votes){
return window.location.href="candiateVoters/"+id;
if(!localStorage.getItem('xosdw9433423zasie')){

    var v=votes==null?1:votes+1;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        url:"/votes?votes="+v+"&id="+id,
        method:'GET',
        contentType:false,
        processData:false,
        contentType:false,
        processData:false,
        success:function(response)
        {
            if(response.success){

                loadSelectedCandidates();
                localStorage.setItem('xosdw9433423zasie','xosdw9433423zasie');
                alert('Thank you!');
                window.location.href="https://www.theeventx.com/view-event/44";
            }

            },error:function(error)
        {
            console.log(error);
        }
    });
}else{
    alert('you have already voted. Thank you!');
    window.location.href="https://www.theeventx.com/view-event/44";
}

}

function loadAllSession(){
    $('.loading-overlay').show();
    $('.can-voting').hide(); 
    var htmls= $('#all_session');
    var row='';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "/list_sessions",
        method: "GET",
        dataType: "json",
        success: function (response) {
            $('.loading-overlay').hide();
                if(response.success && response.data.length > 0){
                    const data=response.data;
                data.forEach(element => {
                    var candidate='';
                    if(element.is_voting_open){
                        $('.can-voting').show(); 
                     candidate=element.is_voting_open?' <a href="https://www.theeventx.com/view-event/44" class="btn btn-info"> Get Ticket </a><a href="/selected-candidates" style="color:white!important" class="btn btn-success mr-1 text-white can-voting">VOTE PRESELECTED CANDIDATES</a>':'';
                    }else{
                        // $('.can-voting').hide(); 
                        candidate='';
                    }
                row+=`
                <div class="col-md-6 mt-5">
                        <div class="card">
                                    <img class="card-img"  style="min-height:350px;max-height:700px" src="/images/${element.image}" alt="${element.title}">
                                    <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                                    <h3 class="wpb_heading wpb_singleimage_heading1 card-title text-center">${element.title} - ${element.country}</h3>

                                    <span class="card-subtitle mb-2" style="color:#fff!important;font-size:40px"><b class="text-white" style="color:#fff!important"></b></span>


                                    <a class="title_link" href="#">
                                        <h2 class="wpb_heading wpb_singleimage_heading2 text-center">

                                        <div class="float-left"><h4 href="#" class="ml-5 mt-4 card-link text-info">${element.date}</h4></div>
                                        <div class="float-right">${candidate}</div>
            


                                        </h2>
                                    </a>

                                    </div>
                                </div>
                        </div>
                            `;

                });

            htmls.html(row);

            }
        },error:function(err){
           // console.log(err);
        }
    }
    );
}



$(document).ready(function() {

	$('form[id="applay_form"]').validate({
    rules: {
      fname: 'required',
      lname: 'required',
	  lname: 'required',
	  dob:'required',
	  phone_number:'required',
	  phone_code:'required',
	  street:'required',
	  city:'required',
	  province:'required',
	  level_education:'required',
	  former_school_attended:'required',
	  current_occupation:'required',
      country:'required',
      profile:'required',
	  education_background:{
        required: true,
		maxlength: 500
      },
	  q1:{
        required: true,
		maxlength: 500
      },
	  q2:{
        required: true,
        maxlength: 500
      },
	  q3:'required',
	  q4:{
        required: true,
        maxlength: 500
      },
	  q5:{
        required: true,
        maxlength: 500
      },
	  q6:{
        required: true,
        maxlength: 500
      },
	  q7:{
        required: true,
        maxlength: 500
      },
      email: {
        required: true,
        email: true,
      }

    },
    messages: {
      fname: 'First name is required',
      lname: 'Last name is required',
      email: 'Enter a valid email',
	  dob:'Birth Date is required',
	  phone_number:'Phone number is required',
	  phone_code:'Phone area code is required',
	  street:'Street is required',
	  city:'City is required',
      province:'Province is required',
      profile:'Profile Picture',
	  level_education:'This is field is required',
	  former_school_attended:'This is field is required',
	  education_background:'Please make sure words do not exceed 500 characters long.',
	  current_occupation:'This is field is required',
	  country:'Country is required',
	  q1:'Please make sure words do not exceed 500 characters long.',
	  q2:'Please make sure words do not exceed 500 characters long.',
	  q3:'Project name is required',
	  q5:'Please make sure words do not exceed 500 characters long.',
	  q6:'Please make sure words do not exceed 500 characters long.',
	  q7:'Please make sure words do not exceed 500 characters long.'
    },
    submitHandler: function(form) {

	$('.loading-overlay').show();
	$('#submit').hide();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    var data = $(form).serializeArray();

			$.ajax({
				url:"/apply",
				method:'POST',
				data:new FormData(form),
				contentType:false,
				processData:false,
				contentType:false,
				processData:false,
				success:function(data)
				{
                    $('.loading-overlay').hide();
					if(data.success){
					alert(data.message);
					window.location.href="./";
					$('#submit').show();
					}

				},error:function(error)
				{
					console.log(error);
				}
			});

    }
  });


  	$('form[id="scholarship_form"]').validate({
    rules: {
      fname: 'required',
      lname: 'required',
	  birth_date:'required',
	  phone_number:'required',
	  phone_code:'required',
	  residence:'required',
	  gender:'required',
	  nationality:'required',
	  national_ID_or_Passport_ID:'required',
	  parents_or_guardian_name:'required',
	  parents_guardian_contacts:'required',
	  q1:{
        required: true,
		maxlength: 500
      },
	  q2:{
        required: true,
        maxlength: 500
      },
	   q3:{
        required: true,
        maxlength: 500
      },
	  q4:{
        required: true,
        maxlength: 500
      },

      email: {
        required: true,
        email: true,
      }

    },
    messages: {
      fname: 'First name is required',
      lname: 'Last name is required',
      email: 'Enter a valid email',
	  birth_date:'Birth Date is required',
	  phone_number:'Phone number is required',
	  phone_code:'Phone area code is required',
	  residence:'Residence is required',
	  gender:'Gender is required',
	  nationality:'Nationality is required',
	  national_ID_or_Passport_ID:'National ID / Passport ID is required',
	  parents_or_guardian_name:'Parents / guardian name is required',
	  parents_guardian_contacts:'Parents / guardian contacts is required',
	  q1:'Please make sure words do not exceed 500 characters long.',
	  q2:'Please make sure words do not exceed 500 characters long.',
	  q3:'Please make sure words do not exceed 500 characters long.',
      q4:'Please make sure words do not exceed 500 characters long.',
    },
    submitHandler: function(form) {

	$('.loading-overlay').show();
	$('#submit').hide();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    var data = $(form).serializeArray();
			$.ajax({
				url:"/scholarship",
				method:'POST',
				data:new FormData(form),
				contentType:false,
				processData:false,
				contentType:false,
				processData:false,
				success:function(data)
				{
                    $('.loading-overlay').hide();
					if(data.success){
					alert(data.message);
					window.location.href="./";
					$('#submit').show();
					}

				},error:function(error)
				{
					console.log(error);
				}
			});

    }
  });

});


function preview_image(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
