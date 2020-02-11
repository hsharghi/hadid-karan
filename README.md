# HADID-KARAN

Laravel docker app



## API

### Worker

#### Get list of workers
`GET /api/workers`
**parameters**
- `page` optional (defautl = 1)
- `perPage` optional (default = 15)


#### Create new worker
`POST /api/workers`
**parameters**
- `name` string 
- `employee_number` string

#### Update a worker

`PUT /api/workers/{id}`

#### Delete a worker
`DELETE /api/workers/{id}`

---

### Machinery

#### Get list of machineries
`GET /api/machineries`
**parameters**
- `page` optional (defautl = 1)
- `perPage` optional (default = 15)

#### Create new worker
`POST /api/machineries`
**parameters**
- `name` string 
- `type` string `CNC | MANUAL | MC`

#### Update a worker

`PUT /api/machineries/{id}`

#### Delete a worker
`DELETE /api/machineries/{id}`


---

### Job

#### Get list of jobs
`GET /api/jobs`
**parameters**
- `page` optional (defautl = 1)
- `perPage` optional (default = 15)

#### Create new job
`POST /api/jobs`
**parameters**
- `title` string 
- `customer_name` string 
- `inquiry_number` string (optional)
- `type` string `INQUIRY | NORMAL`
- `amount` integer 
- `quantity` integer 
- `material` string (optional)
- `weight` string (optional)

#### Update a job
`PUT /api/jobs/{id}`

#### Delete a job
`DELETE /api/jobs/{id}`


