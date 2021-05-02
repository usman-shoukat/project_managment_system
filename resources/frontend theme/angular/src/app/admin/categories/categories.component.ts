import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-categories',
  templateUrl: './categories.component.html',
  styleUrls: ['./categories.component.css'],
})
export class CategoriesComponent implements OnInit {
  categories: any = [];
  errorMessage: string;

  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getCategories();
  }

  getCategories() {
    this.commonService.getCategories().subscribe(
      (res) => {
        this.categories = res;
        $(function () {
          $('table').DataTable();
        });
      },
      (error) => (this.errorMessage = <any>error)
    );
  }
}
