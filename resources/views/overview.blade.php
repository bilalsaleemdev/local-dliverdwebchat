@extends('layouts.adminLayout')
@section('title')
    Overview 
@endsection
@section('styletag')
<style>
.avatar-upload {
  position: relative;
  max-width: 205px;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
  padding: 20% !important;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  /* top: 10px; */
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.signup__body {
  position: relative;
  display: -webkit-box;
  display: flex;
  width: 100%;
  -webkit-box-pack: start;
          justify-content: flex-start;
}

.signup__field {
  font-size: 16px;
  width: 100%;
  height: 44px;
  padding: 0 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
.signup__field::-webkit-input-placeholder {
  -webkit-transition: color 0.15s ease;
  transition: color 0.15s ease;
  color: #fff;
}
.signup__field::-moz-placeholder {
  -moz-transition: color 0.15s ease;
  transition: color 0.15s ease;
}
.signup__field:focus::-webkit-input-placeholder, .signup__field:focus::-moz-placeholder {
  -webkit-transition: color 0.3s ease;
  -moz-transition: color 0.3s ease;
  transition: color 0.3s ease;
  color: #fff;
}
.signup__field:focus + .signup__label {
  /* -webkit-transform: translateY(-18px);
          transform: translateY(-18px); */
  opacity: 1;
  color: #00c4af;
}
.signup__field:focus {
  border: 2px solid #00c4af;
  outline: #00c4af;
}
.signup__label {
  font-size: 12px;
  font-weight: bold;
  line-height: 1;
  position: absolute;
  top: -33%;
  -webkit-transition: all 0.15s;
  transition: all 0.15s;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
  color: #666;
}
.bdrd {border-radius:33px !important;}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
@endsection
@section('bodyContent')

  <!-- Begin Page Content -->
  <div class="">
    <!-- DataTales Example -->
    <div class="">
      <!-- <div class="card-header bgwhite py-3">
        <h6 class="m-0 font-weight-bold text-primary">Heading</h6>
      </div> -->
      <div class="card-body">
        <div class="table-responsive">
          <table class="table" id="dataTable_1" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Date added</th>
                <th>Name</th>
                <th>Active Schedule</th>
                <th>Team</th>
                <th>Status</th>
                <th>Location</th>
                <th></th>
              </tr>
            </thead>
            <!-- <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </tfoot> -->
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>01 January 2020</td>
                <td>26 Aug 2020 <br/> 07:00 - 09:00</td>
                <td>Team 01</td>
                <td>Online</td>
                <td>Streat, Bay area</td>
                <td><a href="" data-toggle="modal" data-target="#Edit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil penci" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" data-toggle="modal" data-target="#Del"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></a></td>
              </tr>
              <tr>
                <td>Tiger Nixon</td>
                <td>01 January 2020</td>
                <td>26 Aug 2020 <br/> 07:00 - 09:00</td>
                <td>Team 01</td>
                <td>Online</td>
                <td>Streat, Bay area</td>
                <td><a href="" data-toggle="modal" data-target="#Edit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil penci" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" data-toggle="modal" data-target="#Del"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></a></td>
              </tr>
              <tr>
                <td>Tiger Nixon</td>
                <td>01 January 2020</td>
                <td>26 Aug 2020 <br/> 07:00 - 09:00</td>
                <td>Team 01</td>
                <td>Online</td>
                <td>Streat, Bay area</td>
                <td><a href="" data-toggle="modal" data-target="#Edit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil penci" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" data-toggle="modal" data-target="#Del"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></a></td>
              </tr>
              <tr>
                <td>Tiger Nixon</td>
                <td>01 January 2020</td>
                <td>26 Aug 2020 <br/> 07:00 - 09:00</td>
                <td>Team 01</td>
                <td>Online</td>
                <td>Streat, Bay area</td>
                <td><a href="" data-toggle="modal" data-target="#Edit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil penci" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" data-toggle="modal" data-target="#Del"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></a></td>
              </tr>
              <tr>
                <td>Tiger Nixon</td>
                <td>01 January 2020</td>
                <td>26 Aug 2020 <br/> 07:00 - 09:00</td>
                <td>Team 01</td>
                <td>Online</td>
                <td>Streat, Bay area</td>
                <td><a href="" data-toggle="modal" data-target="#Edit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil penci" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" data-toggle="modal" data-target="#Del"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></a></td>
              </tr>
              <tr>
                <td>Tiger Nixon</td>
                <td>01 January 2020</td>
                <td>26 Aug 2020 <br/> 07:00 - 09:00</td>
                <td>Team 01</td>
                <td>Online</td>
                <td>Streat, Bay area</td>
                <td><a href="" data-toggle="modal" data-target="#Edit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil penci" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" data-toggle="modal" data-target="#Del"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></a></td>
              </tr>
            </tbody>
          </table>
          <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-image: linear-gradient(to right, rgba(255, 255, 255, .6), rgba(255, 255, 255, .6)), url('image/popupbg.png');background-repeat: no-repeat, no-repeat;">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                  <div class="col-md-8 nopadnomar row mb-4">
                    <div class="col-md-8">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="text" id="name" class="signup__field" placeholder="Full Name" required>
                          <label for="name" class="signup__label">Full Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-10">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="number" id="number" class="signup__field" placeholder="+12 346 3465789" required>
                          <label for="number" class="signup__label">Phone Number</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-10">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="text" id="address" class="signup__field" placeholder="Address" required>
                          <label for="address" class="signup__label">Address</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="text" id="team" class="signup__field" placeholder="Team" required>
                          <label for="team" class="signup__label">Team</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="text" id="time" class="signup__field" placeholder="Local Time" required>
                          <label for="time" class="signup__label">Local Time</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <!-- upload image  -->
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil penci" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg>
                            </label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url();">
                            </div>
                        </div>
                    </div>
                  <!--end upload image  -->
                  </div>
                  
                  <div class="row col-md-12 mt-4">
                    <div class="col-md-4">
                      <div class="signup__body">
                          <input type="password" id="password" class="signup__field" placeholder="Passwerd" required>
                          <label for="password" class="signup__label">Passwerd</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                      <div class="signup__body">
                          <input type="email" id="email" class="signup__field" placeholder="Email@email.com" required>
                          <label for="email" class="signup__label">Email</label>
                        </div>
                    </div>
                  </div>
                </div>
                  
                <button type="button" class="col-md-4 offset-md-4 mt-4 bdrd btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="Del" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h3>Delete Body</h3>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
@section('scriptTag')
<script>
  $(document).ready(function() {
    $('#dataTable_1').dataTable( {
      "sDom": '<"top"p>rt<"bottom"li><"clear">'
    });
  });
</script>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>
@endsection