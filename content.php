
        <div class="row col-md-12">

    <h1>Bank Interest Calculator</h1>
    <p><em>Rates shown are based on approximate estimations, exact interest gained will vary by bank.</em></p>

</div>

<div class="row col-md-12">
    <div class="">
        <div class="form-group">
            <label>Rp Amount</label>
            <input class="form-control" type="number" [(ngModel)]="amount" min="0" max="100000000" />
        </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>DP.</label>
                <input type="number" class="form-control" [(ngModel)]="allyDp" value="{{outDp()}}" min="0" max="100000000" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Jumlah Pinj.</label>
                <input type="number" class="form-control" value="{{outLoan()}}" [(ngModel)]="allyLoan" min="0" max="1000000000000">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Jangka Waktu</label>
                <input type="number" class="form-control" [(ngModel)]="allyYear" max="12" min="1" maxlength="2">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Rate Percentage</label>
                <input type="number" class="form-control" [(ngModel)]="allyRate" required placeholder="Rate Percentage" min="0" max="100">
            </div>
        </div>
    </div>

    <!-- responsive scrollable table -->
    <div class="row col-md-12">
        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                <tr>
                 
                    <th>Monthly</th>
                   
                </tr>
                </thead>
                <tbody>
                <tr>
             
                    <td>Rp {{outangsuran()}}</td>
                  
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
     