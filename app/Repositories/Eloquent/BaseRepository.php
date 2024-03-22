<?php
namespace App\Repositories\Eloquent;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class BaseRepository implements EloquentRepositoryInterface {

    protected $model;

    /**
     * @param $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function getAll()
    {
        try {
            return $this->model->all();
        }catch (\Exception $e) {
            Log::error('Error to get all in database');
            throw new \Exception($e);
        }
    }

    public function find($id)
    {
        try {
            return $this->model->find($id);
        }catch (\Exception $e) {
            Log::error('Error to find in database');
            throw new \Exception($e);
        }
    }

    public function add(Model $model)
    {
        try {
            $newRecord = $this->model->create($model->getAttributes());
            return $newRecord;
        }catch (\Exception $e) {
            Log::error('Error to add in database');
            throw new \Exception($e);
        }
    }

    public function update(Model $model)
    {
        try {
            $this->model->update($model->getAttributes());
            return true;
        }catch (\Exception $e) {
            Log::error('Error to update in database');
            throw new \Exception($e);
        }
    }

    public function delete($id)
    {
        try {
            $record = $this->model->find($id);
            $record->delete();
            $this->model->save();
            return true;
        }catch (\Exception $e) {
            Log::error('Error to delete in database');
            throw new \Exception($e);
        }
    }
}
