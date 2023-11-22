<div class="search" style="min-height: 70vh">

    <div class="input-group"  >
        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li>
                <div class="input-group">
                    <span class="input-group-text" >max and min</span>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="min$" aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                      </div>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="max$" aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                      </div>
                  </div>
            </li>
            <li>
                <div class="input-group">
                    <span class="input-group-text" >lang</span>
                <select class="form-select" aria-label="Default select example">
                    <option selected disabled>Select a lang</option>
                    <option value="AR">AR</option>
                    <option value="EN">EN</option>
                    <option value="FR">FR</option>
                </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label for="selectCategory" class="input-group-text">category</label>
                <select class="form-select" aria-label="Default select example" id="selectCategory">
                    <option selected disabled>Select a category</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                </div>
            </li>
        </ul>
        <button type="button" class="btn btn-outline-secondary">Action</button>
    </div>
</div>
