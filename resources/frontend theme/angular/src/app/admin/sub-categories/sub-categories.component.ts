import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-sub-categories',
  templateUrl: './sub-categories.component.html',
  styleUrls: ['./sub-categories.component.css'],
})
export class SubCategoriesComponent implements OnInit {
  categories: any = [];
  subCategories: any = [];
  errorMessage: string;

  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getCategories();
    this.getSubCategories();
  }

  getCategories() {
    this.commonService.getCategories().subscribe(
      (res) => {
        this.categories = res;
      (error) => (this.errorMessage = <any>error)
      });
  }

  getSubCategories() {
    this.commonService.getSubCategories().subscribe(
      (res) => {
        this.subCategories = res;
        let scope = this;
        this.subCategories.forEach((index) => {
          let filter = scope.categories.filter((a) => a.id === index.cat_id);
          if(filter.length !== 0) {
            index['categories'] = filter[0];
          }          
        });
        $(function () {
          $('table').DataTable();
        });
      },
      (error) => (this.errorMessage = <any>error)
    );
  }
}
