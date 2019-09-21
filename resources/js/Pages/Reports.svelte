<script>
  import Layout from "@/Shared/Layout.svelte";

  export let members = null;
  let title = [];

  $:if(members != null){
      console.log(members)
  }
  $:if(title != ''){
      console.log(title)
  }
</script>

<Layout title="Contact">
  <div class="main-content">
    <div class="section__content section__content--p30">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Report table</h3>
            <div class="table-data__tool">
              <div class="table-data__tool-left">
               
              <form action="">
                <div class="form-group">
              
                    <label class=" form-control-label">Checkboxes</label>

                    <div class="checkbox">
                       <label for="title" class="form-check-label ">
                                  <input type="checkbox"  name="title" value="Pastor"  bind:group={title} class="form-check-input">Pastor
                                  <input type="checkbox"  name="title" value="Elder" bind:group={title} class="form-check-input">Elder
                              </label>
                    </div>
                </div>
                 
              
            </form>









           





            <div class="table-responsive table-responsive-data2">
              <table class="table table-data2">
                <thead>
                  <tr>
                  
                    <th>Title</th>
                    <th>Name</th>
                    <th>Province/District</th>
                    <th>Martial Status</th>
                    <th>Unit</th>
                    <th>Phone Number</th>
                    <th>Date of Birth</th>
                    <th>Year Joined</th>
                   
                  </tr>
                </thead>
                <tbody>
                {#each members as member}
                  <tr class="tr-shadow">
                    <td>
                      {member.title}
                    </td>
                    <td>{member.name}</td>
                    <td>
                      {member.province}/{member.district}
                    </td>
                    <td >{member.matrial_status}</td>
                    <td>{member.unit}</td>
                    <td>
                     {member.number} 
                    </td>
                    <td>{member.dob}</td>
                    <td>
                     {member.year}
                    </td>
                  </tr>
                {/each}
                
                </tbody>
              </table>
            </div>
            <!-- END DATA TABLE -->
          </div>
        </div>

      </div>
    </div>
  </div>
</Layout>
