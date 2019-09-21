<script>
  import Layout from "@/Shared/Layout.svelte";
  import axios from "axios";

  let title = "";
  let name = "";
  let address = "";
  let unit = "";
  let year = "";
  let status = "";
  let province = "";
  let district = "";
  let growth = "";
  let dob = "";
  let number = "";
  let occupation = "";
  let success;
  let error;

  function createMember() {
    const data = {
      title,
      name,
      address,
      unit,
      year,
      status,
      province,
      district,
      number,
      growth,
      dob,
      occupation
    };

    axios
      .post("/create-member", data)
      .then(res => {
        if (res.data.status === "success") {
          success = res.data.msg;
        }
        console.log(res.data);
      })
      .catch(err => console.log(err));

    console.log(data);
  }
</script>

<Layout title="Welcome">

  <!-- MAIN CONTENT-->
  <div class="main-content">
    <div class="section__content section__content--p30">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header">
                <strong>Church</strong>
                <small>Form</small>
              </div>
              <div class="card-body card-block">
                <form on:submit|preventDefault={createMember}>

                  {#if success}
                    <div class="alert">
                      <div class="alert alert-success">
                        <p>{success}</p>
                      </div>
                    </div>
                  {/if}

                  <div class="row form-group">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="company" class=" form-control-label">
                          Title
                        </label>
                        <select
                          class=" form-control"
                          name="Title"
                          bind:value={title}>
                          <option value="">-- Select Title --</option>
                          <option>Pastor</option>
                          <option>Elder</option>
                          <option>Dcn</option>
                          <option>Dcns</option>
                          <option>Bro</option>
                          <option>Sis</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name" class=" form-control-label">
                          Name
                        </label>
                        <input
                          type="text"
                          id="name"
                          placeholder="John Doe"
                          class="form-control"
                          bind:value={name} />
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="address" class=" form-control-label">
                      Address
                    </label>
                    <input
                      type="text"
                      id="address"
                      placeholder="Enter address name"
                      class="form-control"
                      bind:value={address} />
                  </div>

                  <div class="form-group">
                    <label for="unit" class=" form-control-label">
                      Service Unit
                    </label>
                    <input
                      type="text"
                      id="unit"
                      placeholder="Enter your Unit"
                      class="form-control"
                      bind:value={unit} />
                  </div>

                  <div class="form-group">
                    <label for="year" class=" form-control-label">
                      Year you joined the commission
                    </label>
                    <input
                      type="text"
                      id="year"
                      placeholder="2016"
                      class="form-control"
                      bind:value={year} />
                  </div>

                  <div class="form-group">
                    <label for="company" class=" form-control-label">
                      Marital Status
                    </label>
                    <select
                      class=" form-control"
                      name="Title"
                      bind:value={status}>
                      <option>-- Select Status --</option>
                      <option>Single</option>
                      <option>Married</option>
                      <option>Divorsed</option>
                      <option>Widow</option>
                    </select>
                  </div>
                  <div class="row form-group">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="province" class=" form-control-label">
                          Province
                        </label>
                        <input
                          type="text"
                          id="province"
                          placeholder="Kaduna"
                          class="form-control"
                          bind:value={province} />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="district" class=" form-control-label">
                          District
                        </label>
                        <input
                          type="text"
                          id="district"
                          placeholder="Barnawa 2sky"
                          class="form-control"
                          bind:value={district} />
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="church" class=" form-control-label">
                      Church growth squard
                    </label>
                    <input
                      type="text"
                      id="church"
                      placeholder="42%"
                      class="form-control"
                      bind:value={growth} />
                  </div>

                  <div class="form-group">
                    <label for="number" class=" form-control-label">
                      Phone Number
                    </label>
                    <input
                      type="text"
                      id="number"
                      placeholder="070 000 0000"
                      class="form-control"
                      bind:value={number} />
                  </div>

                  <div class="form-group">
                    <label for="dob" class=" form-control-label">
                      Date of Birth
                    </label>
                    <input
                      type="date"
                      id="dob"
                      class="form-control"
                      bind:value={dob} />
                  </div>

                  <div class="form-group">
                    <label for="occupation" class=" form-control-label">
                      Occupation
                    </label>
                    <input
                      type="text"
                      id="occupation"
                      placeholder="Teacher"
                      class="form-control"
                      bind:value={occupation} />
                  </div>

                  <div class="form-group">
                    <button class="btn btn-outline-primary btn-lg btn-block">
                      Submit
                    </button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</Layout>
