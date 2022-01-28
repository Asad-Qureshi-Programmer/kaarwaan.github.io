

document.getElementById("read").onclick = function () {
  const rollV = document.getElementById("roll").value;
  console.log(rollV)
  firebase
    .database()
    .ref("ValunteerDetails/" + rollV)
    .on("value", function (snap) {
      // document.getElementById("CERTIFICATEID").value = snap.val().CERTIFICATEID;
      // document.getElementById("NAME").value = snap.val().NAME;
      // document.getElementById("BG").value = snap.val().BG;
      // document.getElementById("DOB").value = snap.val().DOB;
      // document.getElementById("FATHER").value = snap.val().FATHER;
      // document.getElementById("POSITION").value = snap.val().POSITION;
      // document.getElementById("VERIFIEDBY").value = snap.val().VERIFIEDBY;
      // document.getElementById("WORKINKWA").value = snap.val().WORKINKWA;
      // document.getElementById("COLLEGE").value = snap.val().COLLEGE;
      // document.getElementById("ADDRESS").value = snap.val().ADDRESS;
      // document.getElementById("CONTACT").value = snap.val().CONTACT;
      // document.getElementById("EMAIL").value = snap.val().EMAIL;
      // document.getElementById("SESSION").value = snap.val().SESSION;
      // document.getElementById("GENDER").value = snap.val().GENDER;
    //  console.log(snap.val());
  const ADDRESS = snap.val().ADDRESS;
  const BG= snap.val().BG
  const CERTIFICATEID= snap.val().CERTIFICATEID;
  const COLLEGE= snap.val().COLLEGE; 
  const CONTACT= snap.val().CONTACT;
  const DOB= snap.val().DOB;
  const EMAIL= snap.val().EMAIL;
  const FATHER= snap.val().FATHER;
  const GENDER= snap.val().GENDER;
  const NAME= snap.val().NAME;
  const POSITION= snap.val().POSITION;
  const SESSION= snap.val().SESSION;
  const VERIFIEDBY= snap.val().VERIFIEDBY;
  const WORKINKWA= snap.val().WORKINKWA;
      const arr = [{"Name":NAME},{"FATHER'S NAME":FATHER},{"Blood Group":BG},{"Certificate Id":CERTIFICATEID},{"College":COLLEGE},{"Email":EMAIL},{"Contact":CONTACT},{"Gender":GENDER},{"Position in KaarwaaN":POSITION},{"Session":SESSION},{"Verified By":VERIFIEDBY},{"Duration In KaarwaaN":WORKINKWA},{"Date of Birth":DOB},{"ADDRESS":ADDRESS}]
      var html="";
      arr.forEach(function(data){
         
          html+=`<tr>
          <th scope="row">${Object.keys(data)[0]}</th>
          <td>${data[Object.keys(data)[0]]}</td>
          </tr>`;
      })
     
      document.getElementById('result').innerHTML+=html;
  console.log(html)

  // //     function load_home() {
  // //       document.getElementById("content").innerHTML='<object type="text/html" data="details.html" ></object>';
  // //  }
      console.log(ADDRESS,BG,CERTIFICATEID,COLLEGE,CONTACT,DOB,EMAIL,FATHER,GENDER,NAME,POSITION,SESSION,VERIFIEDBY,WORKINKWA)
});
}
